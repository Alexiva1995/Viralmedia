<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Timezone;
use App\Models\Country;
use App\Models\User;
use Carbon\Carbon;
use DataTables;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


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
        $countries = Country::orderBy('name','ASC')->get();

        $user = Auth::user();

        return view('users.edit')
              ->with('user',$user)
              ->with('countries',$countries)
              ->with('timezone',$timezone);

    }


    // public function registerMediaConversions(Media $media = null)
    // {
    //     $this->addMediaConversion('photo');
    // }

    public function store(Request $request)
    {
        $fields = [
            "name" => ['required'],
            "last_name" => ['required'],
            "email" => [
               'required',
               'string',
               'email',
               'max:255',
           ],
           'photo' => ['required','image','max:2000','mimes:jpeg,png,gif'],

        ];

        $msj = [
            'name.required' => 'El nombre es requerido',
            'email.unique' => 'El correo debe ser unico',
            'photo.required' => 'The photo is required',
        ];

        $this->validate($request, $fields, $msj);

        $user->update($request->all());
        $user->utc = $request->utc;
        $user->whatsapp = $request->whatsapp;
        $user->website = $request->website;
        $user->address = $request->address;
        $user->save();

        $user = User::create($request->all());
  
        

        return redirect()->route('welcome')->withSuccess('Se creo tu usuario con Exito, Verifica el Correo Electronico');
    }



    public function update(Request $request)
    {
        $user = Auth::user();

        $fields = [
         "name" => ['required'],
         "last_name" => ['required'],
         "email" => [
            'required',
            'string',
            'email',
            'max:255',
        ],
        ];

        $msj = [
            'name.required' => 'El nombre es requerido',
            'last_name.required' => 'El telefono es requerido',
            'email.unique' => 'El correo debe ser unico',
        ];

        $this->validate($request, $fields, $msj);

        $user->update($request->all());
        if ($request->hasFile('photo')) {
            if(!$user->getMedia('photo')->isEmpty()) {
                $user->getFirstMedia('photo')->delete();
            }
            $user->addMediaFromRequest("photo")->toMediaCollection('photo');
        }

        $user->utc = $request->utc;
        $user->whatsapp = $request->whatsapp;
        $user->website = $request->website;
        $user->address = $request->address;
        $user->save();

        // $file = $request->file('image_url');
        // $input = $request->all();
        // $img = $this->create($input);

        // $img->addMedia($file)->toMediaCollection;

        return redirect()->route('profile')->with('message','Se actualizo tu perfil');

    }

   

}
