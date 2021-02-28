<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        View::share('titleg', 'Usuarios');
        return view('users.index');
    }
    
    public function edit($id)
    {
        $user = User::findOrfail($id);
        return view('users.edit')
            ->with('user',$user);
    }
}
