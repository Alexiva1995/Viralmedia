<?php

namespace App\Http\Controllers;

use App\Models\AddSaldo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use CoinbaseCommerce\ApiClient;
use CoinbaseCommerce\Resources\Charge as Charge2;
use Illuminate\Support\Facades\DB;


class AddSaldoController extends Controller
{
    //

    public function index()
    {
        try {
            // title
            View::share('titleg', 'Añadir Saldo');

            return view('addsaldo.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }


    /**
     * Permite procesar las compras realizadas por stripe
     *
     * @param Resquest $resquest
     * @return void
     */
    function stripe(Request $request)
    {
        try {
            
            $orden = [
                'iduser' => Auth::id(),
                'saldo' => $request->saldo,
                'metodo_pago' => 'Stripe',
                'fecha_creacion' => Carbon::now()
            ];

            $idorden = $this->saveAddSaldo($orden);

            $secret_key = env('STRIPE_SECRET');
            Stripe::setApiKey($secret_key);

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source'  => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount'   => ($request->saldo * 100),
                'currency' => 'usd'
            ));

            AddSaldo::where('id', $idorden)->update([
                'id_transacion' => $request->stripeToken,
                'fecha_procesado' => Carbon::now(),
                'estado' => 1
            ]);

            $fee = ($request->saldo * 0.10);
            $saldo = $request->saldo - $fee;
            $saldoAcumulado = (AddSaldo::find($idorden)->getUser->balance + $saldo);
            AddSaldo::find($idorden)->getUser->update(['balance' => $saldoAcumulado]);

            return redirect()->back()->with('msj-success', 'Saldo Agregado con exito');

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Permite genera la order para poder procesar la compras
     *
     * @param Request $resquest
     * @return string
     */
    public function generate_orden_payu(Request $request): string
    {
        try {
            
            $orden = [
                'iduser' => Auth::id(),
                'saldo' => $request->saldo,
                'metodo_pago' => 'Payu',
                'fecha_creacion' => Carbon::now()
            ];

            $idorden = $this->saveAddSaldo($orden);
            $payuReference = 'Payu-'.$idorden;
            $signature = env('PAYU_API_KEY').'~'.env('PAYU_MERCHANT_ID').'~'.$payuReference.'~'.$request->saldo.'~COP';
            $data = [
                'idorden' => $payuReference,
                'signature' => md5($signature)
            ];

            return json_encode($data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Permite obtener la repuesta generada por la pasarela de pago payu
     *
     * @param Request $request
     * @param string $orden
     * @return void
     */
    public function response_orden_payu(Request $request, $orden)
    {
        $orden = base64_decode($orden);
        $tmpOrden = explode('-', $orden);
        $idorden = $tmpOrden[1];

        AddSaldo::where('id', $idorden)->update([
            'id_transacion' => $request->transactionId,
        ]);

        $ApiKey = env('PAYU_API_KEY');
        $merchant_id = $request->merchantId;
        $referenceCode = $request->referenceCode;
        $TX_VALUE = $request->TX_VALUE;
        $New_value = number_format($TX_VALUE, 1, '.', '');
        $currency = $request->currency;
        $transactionState = $request->transactionState;
        $firma_cadena = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency~$transactionState";
        $firmacreada = md5($firma_cadena);
        $firma = $request->signature;
        $reference_pol = $request->reference_pol;
        $cus = $request->cus;
        $extra1 = $request->description;
        $pseBank = $request->pseBank;
        $lapPaymentMethod = $request->lapPaymentMethod;
        $transactionId = $request->transactionId;

        if ($request->transactionState == 4 ) {
            $estadoTx = "Transacción aprobada";
        }

        else if ($request->transactionState == 6 ) {
            $estadoTx = "Transacción rechazada";
        }

        else if ($request->transactionState == 104 ) {
            $estadoTx = "Error";
        }

        else if ($request->transactionState == 7 ) {
            $estadoTx = "Transacción pendiente";
        }

        else {
            $estadoTx= $request->mensaje;
        }

        $resumen = '';
        if (strtoupper($firma) == strtoupper($firmacreada)) {
            $resumen = "<h2 class='text-center'>Resumen Transacción</h2>
            <table class='table table-striped mb-0'>
            <tr class='text-center'>
            <td>Estado de la transaccion</td>
            <td>".$estadoTx."</td>
            </tr>
            <tr class='text-center'>
            <tr class='text-center'>
            <td>ID de la transaccion</td>
            <td>".$transactionId."</td>
            </tr>
            <tr class='text-center'>
            <td>Referencia de la venta</td>
            <td>".$reference_pol."</td>
            </tr>
            <tr class='text-center'>
            <td>Referencia de la transaccion</td>
            <td>".$referenceCode."</td>
            </tr>
            <tr class='text-center'>";
            if($pseBank != null) {
                $resumen = $resumen."<tr class='text-center'>
                <td>cus </td>
                <td>".$cus."</td>
                </tr>
                <tr class='text-center'>
                <td>Banco </td>
                <td>".$pseBank."</td>
                </tr>";
            }
            $resumen = $resumen."<tr class='text-center'>
            <td>Valor total</td>
            <td>".number_format($TX_VALUE)."</td>
            </tr>
            <tr class='text-center'>
            <td>Moneda</td>
            <td>".$currency."</td>
            </tr>
            <tr class='text-center'>
            <td>Descripción</td>
            <td>(".$extra1.")</td>
            </tr>
            <tr class='text-center'>
            <td>Entidad:</td>
            <td>(".$lapPaymentMethod.")</td>
            </tr>
            </table>";
        }else{
            $resumen = "<h1>Error validando firma digital.</h1>";
        }

        Session::flash('msj-info', 'En espera de confirmacion');
        return redirect()->route('addsaldo.index')->with('resumen', $resumen);
    }

    /**
     * Confirma el estado de la compra procesada
     *
     * @param Request $request
     * @param string $orden
     * @return void
     */
    public function confimation_orden_payu(Request $request, $orden)
    {
        try {
            $orden = base64_decode($orden);
            $tmpOrden = explode('-', $orden);
            $idorden = $tmpOrden[1];
            $estado = 1;
            if ($request->state_pol > 4) {
                $estado = 2;
            }

            AddSaldo::where('id', $idorden)->update([
                'id_transacion' => $request->transactionId,
                'fecha_procesado' => Carbon::now(),
                'estado' => $estado
            ]);

            $fee = ($request->value * 0.10);
            $saldo = $request->value - $fee;

            $saldoAcumulado = (AddSaldo::find($idorden)->getUser->balance + $saldo);
            AddSaldo::find($idorden)->getUser->update(['balance' => $saldoAcumulado]);
        } catch (\Throwable $th) {
            Log::error("Confirmacion Payu -->".$th);
        }
    }


    /**
     * Permite general la ordenes con coinbase
     *
     * @param Request $request
     * @return void
     */
    public function generate_orden_coinbase(Request $request)
    {
        try {
            $orden = [
                'iduser' => Auth::id(),
                'saldo' => $request->saldo,
                'metodo_pago' => 'Coinbase',
                'fecha_creacion' => Carbon::now()
            ];

            $apiKey = env('COINBASE_API_KEY');
            ApiClient::init($apiKey);

            $idorden = $this->saveAddSaldo($orden);

            $chargerData = [
                    'description' => 'Monto de recarga '.$request->saldo,
                    'metadata' => [
                        'saldo' => $request->saldo,
                        'orden' => $idorden
                    ],
                    'pricing_type' => 'fixed_price',
                    'redirect_url' => route('addsaldo.coinbase.status', ['pendiente']),
                    'cancel_url' => route('addsaldo.coinbase.status', ['cancelada']),
                    'local_price' => [
                        'amount' => $request->saldo,
                        'currency' => 'USD'
                    ],
                    'name' => 'Recarga de Saldo',
                    'payments' => [],
                ];

            $chargerObj = Charge2::create($chargerData);

            AddSaldo::where('id', $idorden)->update([
                'id_transacion' => $chargerObj->code,
            ]);

            return redirect($chargerObj->hosted_url);

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Permite saber si la transacion fue cancelada o esta en espera de aprobacion
     *
     * @param string $status
     * @return void
     */
    public function status_coinbase($status)
    {
        $concepto = "La transaccion esta ".$status;
        $tipo = ($status == 'pendiente') ? 'msj-success' : 'msj-warning';
        return redirect()->route('addsaldo.index')->with($tipo, $concepto);
    }



    /**
     * Permite guardar la orden de compra de saldo
     *
     * @param array $data
     * @return integer
     */
    public function saveAddSaldo($data) : int
    {
        $saldo = AddSaldo::create($data);

        return $saldo->id;
    }

    /**
     * Permite agregar obtener el saldo por meses 
     *
     * @param integer $iduser
     * @return array
     */
    public function getDataGraphicSaldo($iduser): array
    {
        try {
            $valorSaldo = [];
            if ($iduser == 1) {
                $saldos = AddSaldo::select(DB::raw('SUM(saldo) as saldo'))
                                ->where([
                                    ['estado', '>=', 0],
                                ])
                                ->groupBy(DB::raw('YEAR(fecha_creacion)'), DB::raw('MONTH(fecha_creacion)'))
                                ->orderBy(DB::raw('YEAR(fecha_creacion)'), 'ASC')
                                ->orderBy(DB::raw('MONTH(fecha_creacion)'), 'ASC')
                                ->take(6)
                                ->get();
            }else{
                $saldos = AddSaldo::select(DB::raw('SUM(saldo) as saldo'))
                                ->where([
                                    ['iduser', '=', $iduser],
                                    ['estado', '>=', 0],
                                ])
                                ->groupBy(DB::raw('YEAR(fecha_creacion)'), DB::raw('MONTH(fecha_creacion)'))
                                ->orderBy(DB::raw('YEAR(fecha_creacion)'), 'ASC')
                                ->orderBy(DB::raw('MONTH(fecha_creacion)'), 'ASC')
                                ->take(6)
                                ->get();
            }
            foreach ($saldos as $saldo) {
                $valorSaldo [] = $saldo->saldo;
            }
            return $valorSaldo;
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
