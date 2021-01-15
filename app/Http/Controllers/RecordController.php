<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class RecordController extends Controller
{
    public function index(){
        View::share('titleg', 'Historial Ordenes');
        return view('record.orders');
    }

    public function indexCommissions(){
        View::share('titleg', 'Historial Comisiones');
        return view('record.commissions');
    }
    public function indexRequest(){
        View::share('titleg', 'Historial Pedidos');
        return view('record.request');
    }
}
