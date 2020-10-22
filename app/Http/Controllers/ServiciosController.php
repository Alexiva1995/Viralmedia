<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ServiciosController extends Controller
{
    /**
     * Lleva a la vista de los servicios
     *
     * @return void
     */
    public function index()
    {
        //Titulo
        View::share('titleg', 'Servicios');
        return view('servicios.index');
    }

    /**
     * Permite obtener la informacion de los servicios para las ordenes
     *
     * @return string
     */
    public function getDataInfo(): string
    {
        try {
            $categories = Category::select('id', 'name')->where('status', '=', '1')->get();
            foreach ($categories as $category) {
                $category->services = Service::where([
                    ['status', '=', '1'],
                    ['categories_id', '=', $category->id]
                ])->select('package_name', 'minimum_amount', 'maximum_amount', 'price', 'description', 'id')->get();
            }
                        
            return json_encode($categories);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
