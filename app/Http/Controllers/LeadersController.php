<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class LeadersController extends Controller
{
    public function index(){
        View::share('titleg', 'Lideres');
        return view('leaders.index');
    }
}
