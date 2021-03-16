<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OrdenService;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class FollowersController extends Controller
{
    public function list(){

        $orden = OrdenService::whereIn('service_id', ['5','6','7'])->get();

        View::share('titleg', 'Registro de seguidores');
        return view('followers.list')->with('orden', $orden);
    }

    public function graphic(){

        $orden = OrdenService::where('categories_id', '21')->get();

        View::share('titleg', 'Registro Grafico');
        return view('followers.graphics')->with('orden', $orden);

    }

    public function comunity(){

        $orden = OrdenService::all();

        View::share('titleg', 'Registro Comunity');
        return view('followers.comunity')->with('orden', $orden);
    }

}
