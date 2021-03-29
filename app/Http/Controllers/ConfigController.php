<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\Config;

class ConfigController extends Controller
{
    public function index(){

        $config = Config::all()->where('id', '=', '1')->first();

        // dd($config);
        View::share('titleg', 'Ajustes Generales');
        return view('ajust.general')->with('config', $config);
        
    }
    
    public function update(Request $request)
    {
        $config = Config::all()->where('id', '=', '1')->first();

        $fields = [     ];

        $msj = [       ];

        $this->validate($request, $fields, $msj);

        // foto

        $config->update($request->all());

        if ($request->hasFile('photo')) {
            if(!$config->getMedia('photo')->isEmpty()) {
                $config->getFirstMedia('photo')->delete();
            }
            $config->addMediaFromRequest("photo")->toMediaCollection('photo');
        }


        if ($request->hasFile('icon')) {
            if(!$config->getMedia('icon')->isEmpty()) {
                $config->getFirstMedia('icon')->delete();
            }
            $config->addMediaFromRequest("icon")->toMediaCollection('icon');
        }

        $config->save();

        return redirect()->route('general')->with('msj-success','Se actualizo la configuracion de la pagina Exitosamente');
    }

    public function term(){

        $config = Config::all()->where('id', '=', '1')->first();

        return view('term')->with('config', $config);
        
    }
    
}
 