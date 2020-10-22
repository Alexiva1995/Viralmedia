<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Service;

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
                $category = Category::find(request()->category);
                $name_category = $category->name;
            }
            $types_services = $this->getServiceType();
            $api_providers = $this->getAPIProvider();

            return view('manager_services.services.index', compact('categories', 'services', 'types_services', 'api_providers', 'name_category'));
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
            'type' => ['required']
        ]);

        try {
            if ($validate) {
                Service::create($request->all());
                $route = route('services.index').'?category='.$request->categories_id;
                return redirect()->with('msj-success', 'Nuevo Servicio Creado');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $service = Service::find($id);
            return json_encode($service);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
                $service->type_services = $request->type_services;
                $service->drip_feed = (!empty($request->drip_feed)) ? $request->drip_feed : $service->drip_feed;
                $service->type = $request->type;
                $service->api_provide_name = $request->api_provide_name;
                $service->api_service_id = $request->api_service_id;
                $service->description = $request->description;
                $service->save();
                $route = route('services.index').'?category='.$request->categories_id;
                return redirect()->with('msj-success', 'Servicio '.$id.' Actualizado ');
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
            return redirect()->with('msj-success', 'Servicio '.$id.' Eliminado');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
