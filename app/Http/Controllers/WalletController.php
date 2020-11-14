<?php

namespace App\Http\Controllers;

use App\Models\AddSaldo;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TreeController;


class WalletController extends Controller
{
    //

    public $treeController;

    public function __construct()
    {
        $this->treeController = new TreeController;
        View::share('titleq', 'Billetera');
    }

    /**
     * Lleva a la vista de la billetera
     *
     * @return void
     */
    public function index()
    {
        $this->payComision();
        if (Auth::user()->admin == 1) {
            $wallets = Wallet::all();
        }else{
            $wallets = Auth::user()->getWallet;
        }
        return view('wallet.index', compact('wallets'));
    }

    /**
     * Permite pagar las comisiones de los usuarios
     *
     * @return void
     */
    public function payComision()
    {
        try {
            $saldos = $this->getSaldos(Auth::id());
            foreach ($saldos as $saldo) {
                $sponsors = $this->treeController->getSponsor($saldo->iduser, [], 0, 'ID', 'referred_id');
                if (!empty($sponsors)) {
                    foreach ($sponsors as $sponsor) {
                        if ($sponsor->id != $saldo->iduser) {
                            if ($sponsor->nivel <= 5) {
                                $pocentaje = $this->getPorcentage($sponsor->nivel);
                                $monto = $this->recalcularMonto($saldo->saldo, $saldo->metodo_pago);
                                $comision = ($monto * $pocentaje);
                                $concepto = 'Comision del usuario '.$saldo->getUser->fullname.' por un monto de '.$saldo->saldo;
                                $data = [
                                    'iduser' => $sponsor->id,
                                    'referred_id' => $saldo->iduser,
                                    'orden_id' => $saldo->id,
                                    'debito' => $comision,
                                    'descripcion' => $concepto,
                                    'status' => 0,
                                    'tipo_transaction' => 0,
                                ];
                                $this->saveWallet($data);
                            }
                        }
                    }
                }
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Permite obtener el porcentaje a pagar
     *
     * @param integer $nivel
     * @return float
     */
    public function getPorcentage(int $nivel): float
    {
        $nivelPorcentaje = [
            1 => 0.20, 2 => 0.10, 3 => 0.05, 4 => 0.02, 5 => 0.03
        ];

        return $nivelPorcentaje[$nivel];
    }

    /**
     * Permite Recalcular el monto a pagar por el tipo de medio que recargo
     *
     * @param float $monto
     * @param string $tipo_pago
     * @return float
     */
    public function recalcularMonto(float $monto, string $tipo_pago):float
    {
        $arrayMetodo = [
            'payulatam' => 1.10, 'manual' => 1.00, 'stripe' => 1.10, 'coinbase' => 1.02
        ];
        
        $resultado = ($monto / $arrayMetodo[strtolower($tipo_pago)]);
        return $resultado;
    }

    /**
     * Permite obtener las compras de saldo de los ultimos 30 dias
     *
     * @param integer $iduser
     * @return object
     */
    public function getSaldos($iduser): object
    {
        try {
            $fecha = Carbon::now();
            $saldos = AddSaldo::where([
                ['iduser', '=', $iduser],
                ['estado', '=', 1]
            ])->whereDate('created_at', '>=', $fecha->subDay(30))->get();
            return $saldos;
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Permite guardar la informacion de la wallet
     *
     * @param array $data
     * @return void
     */    
    public function saveWallet($data)
    {
        try {
            $check = Wallet::where([
                ['iduser', '=', $data['iduser']],
                ['orden_id', '=', $data['orden_id']]
            ])->first();
            if ($check == null) {
                if ($data['tipo_transaction'] == 1) {
                    $wallet = Wallet::create($data);
                    $saldoAcumulado = ($wallet->getWalletUser->wallet - $data['credito']);
                    $wallet->getWalletUser->update(['wallet' => $saldoAcumulado]);
                    $wallet->update(['balance' => $saldoAcumulado]);
                }else{
                    $wallet = Wallet::create($data);
                    $saldoAcumulado = ($wallet->getWalletUser->wallet + $data['debito']);
                    $wallet->getWalletUser->update(['wallet' => $saldoAcumulado]);
                    $wallet->update(['balance' => $saldoAcumulado]);
                }
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
