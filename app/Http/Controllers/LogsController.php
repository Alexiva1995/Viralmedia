<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\AddSaldo;

class LogsController extends Controller
{
    public function index(){
        View::share('titleg', 'Transactions Logs');

        $logs = AddSaldo::all();
        return view('logs.index')->with('logs', $logs);
    }
}
