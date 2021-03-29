<?php

namespace App\Http\Controllers;

use App\Models\Liquidaction;
use App\Models\User;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class LiquidactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        View::share('titleg', 'General Liquidaciones');
        $comisiones = $this->getTotalComisiones([], null);
        return view('settlement.index', compact('comisiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comiciones = Wallet::where([
            ['status', '=', 0],
            ['liquidation_id', '=', null],
            ['tipo_transaction', '=', 0],
            ['iduser', '=', $id]
        ])->get();

        foreach ($comiciones as $comi) {
            $fecha = new Carbon($comi->created_at);
            $comi->fecha = $fecha->format('Y-m-d');
            $comi->referido = User::find($comi->referred_id)->only('fullname');
        }
        
        $user = User::find($id);

        $detalles = [
            'iduser' => $id,
            'fullname' => $user->fullname,
            'comisiones' => $comiciones,
            'total' => $comiciones->sum('debito')
        ];

        return json_encode($detalles);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Liquidaction  $liquidaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Liquidaction  $liquidaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Liquidaction $liquidaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Liquidaction  $liquidaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liquidaction $liquidaction)
    {
        //
    }

    /**
     * Permite Obtener la informacion de las comisiones y el total disponible
     *
     * @param array $filtros - filtro para mejorar la vistas
     * @param integer $iduser - si es para un usuario especifico
     * @return array
     */
    public function getTotalComisiones(array $filtros, int $iduser = null): array
    {
        try {
            $comisiones = [];
            if ($iduser != null && $iduser != 1) {
                $comisionestmp = Wallet::where([
                    ['status', '=', 0],
                    ['liquidation_id', '=', null],
                    ['tipo_transaction', '=', 0],
                    ['iduser', '=', $iduser]
                ])->select(
                    DB::raw('sum(debito) as total'), 'iduser'
                )->groupBy('iduser')->get();
            }else{
                $comisionestmp = Wallet::where([
                    ['status', '=', 0],
                    ['liquidation_id', '=', null],
                    ['tipo_transaction', '=', 0],
                ])->select(
                    DB::raw('sum(debito) as total'), 'iduser'
                )->groupBy('iduser')->get();
            }

            foreach ($comisionestmp as $comision) {
                $comision->getWalletUser;
                if ($comision->getWalletUser != null) {
                    if ($filtros == []) {
                        $comisiones[] = $comision;
                    }else{
                        if (!empty($filtros['activo'])) {
                            if ($comision->status == 1) {
                                if (!empty($filtros['mayorque'])) {
                                    if ($comision->total >= $filtros['mayorque']) {
                                        $comisiones[] = $comision;
                                    }
                                } else {
                                    $comisiones[] = $comision;
                                }
                            }
                        }else{
                            if (!empty($filtros['mayorque'])) {
                                if ($comision->total >= $filtros['mayorque']) {
                                    $comisiones[] = $comision;
                                }
                            } else {
                                $comisiones[] = $comision;
                            }
                        }
                    }
                }
            }
            return $comisiones;
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
