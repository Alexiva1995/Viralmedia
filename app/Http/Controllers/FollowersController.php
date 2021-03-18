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
    public function listFollowers(){

        $orden = OrdenService::whereIn('categories_id', ['1','10','15'])->get();

        View::share('titleg', 'Registro de seguidores');
        return view('followers.list')->with('orden', $orden);
    }

    public function editFollowers(Request $request, $id){
     
        $orden = OrdenService::find($id);

        View::share('titleg', 'Registro de seguidores');
        return view('followers.list-component.list-edit')->with('orden', $orden);
    }

    public function updateFollowers(Request $request, $id){

        $orden = OrdenService::find($id);

        $fields = [
            'status' => ['required']
        ];
        
        $msj = [
            'status.required' => 'Es requerido el Estatus de la Orden',
        ];
        
        $this->validate($request, $fields, $msj);

        $orden->update($request->all());
        $orden->save();
        
        return redirect()->route('followers.list')->with('msj-success', 'Orden '.$id.' Actualizado');
    }

    public function destroyFollowers($id)
    {
      $orden = OrdenService::find($id);

      $orden->delete();

      return redirect()->route('followers.list')->with('msj-success', 'Orden '.$id.' Eliminada');
    }



    public function listGraphic(){

        $orden = OrdenService::where('categories_id', '21')->get();

        View::share('titleg', 'Registro Grafico');
        return view('followers.graphics')->with('orden', $orden);

    }

    public function editGraphic(Request $request, $id){
     
        $orden = OrdenService::find($id);

        View::share('titleg', 'Registro de seguidores');
        return view('followers.graphics-component.graphics-edit')->with('orden', $orden);
    }

    public function updateGraphic(Request $request, $id){

        $orden = OrdenService::find($id);

        $fields = [
            'status' => ['required']
        ];
        
        $msj = [
            'status.required' => 'Es requerido el Estatus de la Orden',
        ];
        
        $this->validate($request, $fields, $msj);

        $orden->update($request->all());
        $orden->save();
        
        return redirect()->route('graphics.list')->with('msj-success', 'Orden '.$id.' Actualizado');
    }
    

    public function destroyGraphic($id)
    {
      $orden = OrdenService::find($id);

      $orden->delete();

      return redirect()->route('graphics.list')->with('msj-success', 'Orden '.$id.' Eliminada');
    }


    public function listComunity(){

        $orden = OrdenService::where('categories_id', '2')->get();

        View::share('titleg', 'Registro Comunity');
        return view('followers.comunity')->with('orden', $orden);
    }

    public function editComunity(Request $request, $id){
     
        $orden = OrdenService::find($id);

        View::share('titleg', 'Registro de seguidores');
        return view('followers.comunity-component.comunity-edit')->with('orden', $orden);
    }

    public function updateComunity(Request $request, $id){

        $orden = OrdenService::find($id);

        $fields = [
            'status' => ['required']
        ];
        
        $msj = [
            'status.required' => 'Es requerido el Estatus de la Orden',
        ];
        
        $this->validate($request, $fields, $msj);

        $orden->update($request->all());
        $orden->save();
        
        return redirect()->route('comunity.list')->with('msj-success', 'Orden '.$id.' Actualizado');
    }

    public function destroyComunity($id)
    {
      $orden = OrdenService::find($id);

      $orden->delete();

      return redirect()->route('comunity.list')->with('msj-success', 'Orden '.$id.' Eliminada');
    }

}
