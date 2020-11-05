<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OrdenService;
use App\Models\Service;
use App\Models\User;
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
                ])->select('package_name', 'minimum_amount', 'maximum_amount', 'price', 'description', 'id', 'input_adicionales')->get();
                foreach ($category->services as $service) {
                    $service->input_adicionales = json_decode($service->input_adicionales);
                }
            }
                        
            return json_encode($categories);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Permite guardar las ordenes procesadas
     *
     * @param Request $request
     * @return void
     */
    public function saveOrden(Request $request)
    {
        $validate = $request->validate([
            'iduser' => ['required'],
            'categories_id' => ['required'],
            'service_id' => ['required'],
            'link' => ['nullable', 'url'],
            'usuario' => ['nullable', 'string'],
            'email' => ['nullable', 'email'],
            'email_respaldo' => ['nullable', 'email'], 
            'whatsapp' => ['nullable', 'string'],
            'total' => ['required']
        ]);

        try {
            if ($validate){
                $user = User::find($request->iduser);
                // if ($user->balance < $request->total) {
                //     $concepto = "Su Saldo Es Insuficiente para realizar esta compra";
                //     return redirect()->back()->with('msj-warning', $concepto);    
                // }
                $orden = OrdenService::create($request->all());
                $saldoAcumulado = ($orden->getOrdenUser->balance - $request->total);
                $orden->getOrdenUser->update(['balance' => $saldoAcumulado]);
                $concepto = "Orden N° ".$orden->id." Procesada Exitosamente";
                return redirect()->back()->with('msj-success', $concepto);
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
