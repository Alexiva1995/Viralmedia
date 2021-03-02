<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Timezone;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        View::share('titleg', 'Usuarios');
        return view('users.index');
    }
    
    public function edit()
    {
        $timezone = Timezone::orderBy('list_utc','ASC')->get();
        $user = Auth::user();

        return view('users.edit')
            ->with('user',$user)
            ->with('timezone',$timezone);

    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $fields = [
         "name" => ['required'],
         "last_name" => ['required'],
         "utc",
         "email" => [
              'required',
              'string',
              'email',
              'max:255'
          ],
        ];

        $msj = [
            'name.required' => 'El nombre es requerido',
            'last_name.required' => 'El telefono es requerido',
            'email.unique' => 'El correo debe ser unico',
        ];

        $this->validate($request, $fields, $msj);

        $user->update($request->all());

        return redirect()->route('profile')->with('message','Se actualizo tu perfil');

    }
}
