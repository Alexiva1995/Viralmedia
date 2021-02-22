<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class SettlementController extends Controller
{

    public function index(){
        View::share('titleg', 'General Liquidaciones');
        return view('settlement.index');
    }
    public function history(){
        View::share('titleg', 'Liquidaciones Realizadas');
        return view('settlement.history');
    }
    public function pending(){
        View::share('titleg','Liquidaciones Pendientes');
        return view('settlement.pending');
    }
}
