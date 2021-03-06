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

use function GuzzleHttp\json_decode;

class ServicesAdminController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         try {
             // title
             View::share('titleg', 'Servicios');

             $categories = Category::all()->where('status', 1);
             if (!empty(request()->category)) {
                 $services = Service::all()->where('categories_id', request()->category);
                 foreach ($services as $service) {
                     $service->input_adicionales = null;
                     if ($service->input_adicionales != null || $service->input_adicionales != '') {
                         $service->input_adicionales = json_decode($service->input_adicionales);
                     }
                 }
                 $category = Category::find(request()->category);
                 $name_category = $category->name;
             }
             $types_services = $this->getServiceType();
             $api_providers = $this->getAPIProvider();

         return view('manager_services.services.index', compact('categories', 'services', 'types_services', 'api_providers','name_category'));
         } catch (\Throwable $th) {
             dd($th);
         }


    }

    /**
     * Permite obtener los tipos de servicios
     *
     * @return array
     */
    private function getServiceType():array
    {
        return [
            'default' => 'Default',
            'subscriptions' => 'Subscriptions',
            'custom_comments' => 'Custom Comments',
            'custom_comments_package' => 'Custom Comments Package',
            'mentions_with_hashtags' => 'Mentions with hashtahs',
            'mentions_custom_list' => 'Mentions custom list',
            'mentions_hashtags' => 'Mentions hashtahs',
            'mentions_user_followers' => 'Mentions user followers',
            'mentions_media_likers' => 'Mentions media likers',
            'package' => 'Package',
            'comment_likes' => 'Comment likes',
        ];
    }

    /**
     * Permite obtener los tipos de api
     *
     * @return array
     */
    private function getAPIProvider():array
    {
        return [
            '1' => 'CustomServer Version 10.1',
            '2' => 'HQ second server',
            '3' => 'Hq tercer servidor dedicated',
            '4' => 'Cuarta Api Dedicated',
            '5' => 'Proxima Api en Proceso',
            '6' => 'yoyo',
            '7' => 'BulkFollows',
            '8' => 'Tony Pannel',
        ];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'package_name' => ['required'],
            'categories_id' => ['required'],
            'minimum_amount' => ['required'],
            'maximum_amount' => ['required'],
            'price' => ['required'],
            'type_services' => ['required'],
            'type' => ['required'],
            'input_adicionales' => ['required']
        ]);

        try {
            if ($validate) {
                $request['input_adicionales'] = json_encode($request->input_adicionales);
                Service::create($request->all());
                $route = route('services.index').'?category='.$request->categories_id;
                return redirect($route)->with('msj-success', 'Nuevo Servicio Creado');
            }
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $service = Service::find($id);
            return $service->description;
        } catch (\Throwable $th) {
            dd($th);
        }
    }


    public function update(Request $request, $id)
    {

             $validate = $request->validate([
            'package_name' => ['required'],
            'categories_id' => ['required'],
            'minimum_amount' => ['required'],
            'maximum_amount' => ['required'],
            'price' => ['required'],
            'type_services' => ['required'],
            'type' => ['required']

             ]);

         try {
             if ($validate) {
                 $service = Service::find($id);
                 $service->package_name = $request->package_name;
                 $service->categories_id = $request->categories_id;
                 $service->minimum_amount = $request->minimum_amount;
                 $service->maximum_amount = $request->maximum_amount;
                 $service->price = $request->price;
                 $service->status = $request->status;
                 $request->input_adicionales = json_encode($request->input_adicionales);
                 $service->type_services = $request->type_services;
                 $service->drip_feed = (!empty($request->drip_feed)) ? $request->drip_feed : $service->drip_feed;
                 $service->type = $request->type;
                 $service->api_provide_name = $request->api_provide_name;
                 $service->api_service_id = $request->api_service_id;
                 $service->description = $request->description;
                 $service->save();
                 $route = route('services.index').'?category='.$request->categories_id;
                 return redirect($route)->with('msj-success', 'Servicio '.$id.' Actualizado ');
             }
         } catch (\Throwable $th) {
             dd($th);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $service = Service::find($id);
            $category = $service->categories_id;
            $service->delete();
            $route = route('services.index').'?category='.$category;
            return redirect($route)->with('msj-success', 'Servicio '.$id.' Eliminado');
        } catch (\Throwable $th) {
            dd($th);
        }
    }




    // permite ver la lista de ordenes

    public function indexAdmin()
    {
        $orden = OrdenService::all();

        View::share('titleg', 'Historial de Ordenes');

        return view('record.componenteRecord.admin.orders-admin')
        ->with('orden', $orden);
    }

    // permite editar la orden

    public function editAdmin($id)
    {

        $orden = OrdenService::find($id);
        return view('record.componenteRecord.admin.edit-order-admin')
        ->with('orden', $orden);
        // try {
        //     $service = Service::find($id);
        //     $service->input_adicionales = json_decode($service->input_adicionales);
        //     return json_encode($service);
        // } catch (\Throwable $th) {
        //     dd($th);
        // }
    }

    // permite actualizar la orden

    public function updateAdmin(Request $request, $id)
    {

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
        
        return redirect()->route('record_order.index-admin')->with('msj-success', 'Orden '.$id.' Actualizado');

    }

    // permite ver la orden

    public function showAdmin($id)
    {
   
       $orden = OrdenService::find($id);
       return view('record.componenteRecord.admin.show-order-admin')
       ->with('orden', $orden);
    }
   

}
