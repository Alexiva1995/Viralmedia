<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        View::share('titleg', 'Usuarios');
        return view('users.index');
    }
}
