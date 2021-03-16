<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\User;

use Illuminate\Http\Request;

class LeadersController extends Controller
{
    public function index(){

        $user = User::all();

        $totalReferidos = User::where('referred_id', '=', 'id')->get()->count('id');

        View::share('titleg', 'Lideres');
        return view('leaders.index')
        ->with('user', $user)
        ->with('totalReferidos', $totalReferidos);
    }
}
