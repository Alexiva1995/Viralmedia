<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\TreeController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\AddSaldoController;
use App\Http\Controllers\WalletController;

class HomeController extends Controller
{
    public $treeController;
    public $ticketController;
    public $servicioController;
    public $addsaldoController;
    public $walletController;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->treeController = new TreeController;
        $this->ticketController = new TicketsController;
        $this->servicioController = new ServiciosController;
        $this->addsaldoController = new AddSaldoController;
        $this->walletController = new WalletController;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        View::share('titleg', '');
        $data = $this->dataDashboard(Auth::id());
        return view('dashboard.index', compact('data'));
    }

    public function indexUser()
    {
        View::share('titleg', '');
        $data = $this->dataDashboard(Auth::id());
        return view('dashboard.indexUser', compact('data'));
    }

    /**
     * Permite obtener la informacion a mostrar en el dashboard
     *
     * @param integer $iduser
     * @return array
     */
    public function dataDashboard(int $iduser):array
    {
        $cantUsers = $this->treeController->getTotalUser($iduser);
        $data = [
            'directos' => $cantUsers['directos'],
            'indirectos' => $cantUsers['indirectos'],
            'wallet' => Auth::user()->wallet,
            'balance' => Auth::user()->balance,
            'tickets' => $this->ticketController->getTotalTickets($iduser),
            'comisiones' => $this->walletController->getTotalComision($iduser),
            'ordenes' => $this->servicioController->getTotalOrdenes($iduser),
            'usuario' => Auth::user()->fullname
        ];

        return $data;
    }

    /**
     * Permite obtener la informacion para las graficas del dashboard
     *
     * @return string
     */
    public function getDataGraphic(): string
    {
        $iduser = Auth::id();
        $data = [
            'tickets' => $this->ticketController->getDataGraphiTickets($iduser),
            'comisiones' => $this->walletController->getDataGraphiComisiones($iduser),
            'saldo' => $this->addsaldoController->getDataGraphicSaldo($iduser),
            'ordenes' => $this->servicioController->getDataGraphiOrdens($iduser)
        ];
        
        return json_encode($data);
    }
}
