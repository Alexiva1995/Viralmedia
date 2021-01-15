<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index(){
        View::share('titleg', 'Transactions Logs');
        return view('logs.index');
    }
}
