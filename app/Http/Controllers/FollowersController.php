<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function list(){
        View::share('titleg', 'Registro de seguidores');
        return view('followers.list');
    }

    public function graphic(){
        View::share('titleg', 'Registro de graficas');
        return view('followers.graphics');

    }

    public function comunity(){
        View::share('titleg', 'Registro Comunity');
        return view('followers.comunity');
    }

}
