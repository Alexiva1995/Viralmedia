<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SettlementController extends Controller
{

    public function index(){
        
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
