<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class ImpersonateController extends Controller
{
   
    public function start(User $user)
    {
        session()->put('impersonated_by', auth()->id());

        Auth::login($user);

        return redirect()->route('users.list-user')->with('msj-success','Te has logueado Exitosamente');

    }

    public function stop()
    {

        Auth::loginUsingId(session()->pull('impersonated_by'));

        return redirect()->route('users.list-user')
        ->with('msj-success','Has iniciado seccion Exitosamente');

    }
}
