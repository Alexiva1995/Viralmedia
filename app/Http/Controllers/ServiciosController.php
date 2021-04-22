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
            'total' => ['required'],
            'status' => ['0'],
        ]);
        try {
            if ($validate){
                $user = User::find($request->iduser);
                // if ($user->balance < $request->total) {
                //     $concepto = "Su Saldo Es Insuficiente para realizar esta compra";
                //     return redirect()->back()->with('msj-warning', $concepto);    
                // }
                $orden = User::all();
                if($user->balance >= '10'){
                    $servicio = Service::find($request->service_id);
                    $msj = '';
                    if ($servicio->minimum_amount > $request->total) {
                        $msj = 'El total es menor al monto minimo';
                    }

                    if ($request->total > $servicio->maximum_amount) {
                        $msj = 'El total es mayor al monto minimo';
                    }

                    if ($msj == '') {
                        $orden = OrdenService::create($request->all());
                        $saldoAcumulado = ($orden->getOrdenUser->balance - $request->total);
                        $orden->getOrdenUser->update(['balance' => $saldoAcumulado]);
                        $concepto = "Orden N° ".$orden->id." Procesando Exitosamente";
                    }else{
                        $concepto = $msj;
                    }

                    return redirect()->back()->with('msj-success', $concepto);
                }else{
                    return redirect()->back()->with('msj-warning', 'Saldo Insuficiente, Servicio no Adquirido');
                }
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }


    // permite ver la lista de ordenes

    public function indexUser(Request $request)
    {
        $categories = Category::all();
        $service = Service::all();
        $orden = OrdenService::where('iduser', Auth::id())->get();

        View::share('titleg', 'Historial de Ordenes');

        return view('record.componenteRecord.user.orders-user')
        ->with('orden', $orden)
        ->with('categories', $categories)
        ->with('service', $service);
    }

    // permite editar la orden

    public function editUser(Request $request, $id)
    {
        $orden = OrdenService::find($id);
        return view('record.componenteRecord.user.edit-order-user')
        ->with('orden', $orden);
    }

    // permite actualizar la orden

    public function updateUser(Request $request, $id)
    {

        $orden = OrdenService::find($id);

        
        $fields = [
            'link' => ['nullable', 'url'],
            'email' => ['nullable', 'email'],
            'whatsapp' => ['nullable', 'string'],
        ];
        
        $msj = [
            // 'email.required' => 'Es requerido el Estatus de la Orden',
            // 'whatsapp.required' => 'Es requerido el Estatus de la Orden',
            // 'link.required' => 'Es requerido el Estatus de la Orden',
        ];
        
        $this->validate($request, $fields, $msj);

        $orden->update($request->all());
        $orden->save();
        
        return redirect()->route('record_order.index-user')->with('msj-success', 'Orden '.$id.' Actualizado');

    }

    // permite ver la orden

    public function showUser(Request $request, $id)
    {
        $orden = OrdenService::find($id);
        return view('record.componenteRecord.user.show-order-user')
        ->with('orden', $orden);
    }

    /**
     * Permite obtener la cantidad de ordenes que tiene un usuario
     *
     * @param integer $iduser
     * @return integer
     */
    public function getTotalOrdenes($iduser): int
    {
        try {
            $ordenes = OrdenService::where('iduser', $iduser)->get()->count('id');
            if ($iduser == 1) {
                $ordenes = OrdenService::all()->count('id');
            }
            return $ordenes;
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Permite obtener el total de ordenes por meses
     *
     * @param integer $iduser
     * @return array
     */
    public function getDataGraphiOrdens($iduser): array
    {
        try {
            $totalOrdenes = [];
            if (Auth::user()->admin == 1) {
                $ordenes = OrdenService::select(DB::raw('COUNT(id) as ordenes'))
                                ->where([
                                    ['status', '>=', 0]
                                ])
                                ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
                                ->orderBy(DB::raw('YEAR(created_at)'), 'ASC')
                                ->orderBy(DB::raw('MONTH(created_at)'), 'ASC')
                                ->take(6)
                                ->get();
            }else{
                $ordenes = OrdenService::select(DB::raw('COUNT(id) as ordenes'))
                                ->where([
                                    ['iduser', '=',  $iduser],
                                    ['status', '>=', 0]
                                ])
                                ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
                                ->orderBy(DB::raw('YEAR(created_at)'), 'ASC')
                                ->orderBy(DB::raw('MONTH(created_at)'), 'ASC')
                                ->take(6)
                                ->get();
            }
            foreach ($ordenes as $orden) {
                $totalOrdenes [] = $orden->ordenes;
            }
            return $totalOrdenes;
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
