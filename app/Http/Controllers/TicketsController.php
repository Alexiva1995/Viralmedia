<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;


class TicketsController extends Controller
{

    public function create(){

        return view('tickets.create');
    }

    public function store(Request $request){

        $fields = [
            "email" => ['required'],
            "whatsapp" => ['required'],
            "issue" => ['required'],
            "description" => ['required'],
            'status' => ['Pendiente'],
        ];

        $msj = [
            'email.required' => 'El email es Requerido',
            'whatsapp.required' => 'El whatsapp es Requerido',
            'issue.required' => 'El asunto es Requerido',
            'description.required' => 'La descripción es Requerido',
        ];

        $this->validate($request, $fields, $msj);

        $ticket = Ticket::create($request->all());
        $ticket->iduser = Auth::user()->id;
        $ticket->save();
        

        return redirect()->route('ticket.list-user')->with('msj-success', 'El Ticket se creo Exitosamente');
    }

    public function edit(){
        return view('tickets.edit');
    }

    public function update(){
        return view('tickets.edit');

    }

    public function listAdmin(){
        return view('tickets.componenteTickets.list-admin');

    }

    public function showAdmin(){
        return view('tickets.componenteTickets.show-admin');
    }

    public function listUser(){
        return view('tickets.componenteTickets.list-user');
    }

    public function showUser(){
        return view('tickets.componenteTickets.show-user');
    }


        /**
     * Permite obtener la cantidad de Tickets que tiene un usuario
     *
     * @param integer $iduser
     * @return integer
     */
    public function getTotalTickets($iduser): int
    {
        try {
            $Tickets = Ticket::where('iduser', $iduser)->get()->count('id');
            if ($iduser == 1) {
                $Tickets = Ticket::all()->count('id');
            }
            return $Tickets;
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Permite obtener el total de Tickets por meses
     *
     * @param integer $iduser
     * @return array
     */
    public function getDataGraphiTickets($iduser): array
    {
        try {
            $totalTickets = [];
            if (Auth::user()->admin == 1) {
                $Tickets = Ticket::select(DB::raw('COUNT(id) as Tickets'))
                                ->where([
                                    ['status', '>=', 0]
                                ])
                                ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
                                ->orderBy(DB::raw('YEAR(created_at)'), 'ASC')
                                ->orderBy(DB::raw('MONTH(created_at)'), 'ASC')
                                ->take(6)
                                ->get();
            }else{
                $Tickets = Ticket::select(DB::raw('COUNT(id) as Tickets'))
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
            foreach ($Tickets as $ticket) {
                $totalTickets [] = $ticket->Tickets;
            }
            return $totalTickets;
        } catch (\Throwable $th) {
            dd($th);
        }
    }

}
