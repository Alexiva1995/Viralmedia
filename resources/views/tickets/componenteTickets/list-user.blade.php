@extends('layouts.dashboard')

@section('content')


@section('content')
<div id="record">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <h1>Historial de Ordenes</h1>
                        <p>Para ver mas información dar click -> <img src="{{asset('assets/img/sistema/btn-plus.png')}}" alt=""></p>
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>ID</th>
                                    <th>Whatsapp</th>
                                    <th>Email</th>
                                    <th>Asunto</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th>Fecha de Creacion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- @foreach ($orden as $item)
                                <tr class="text-center">
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->getOrdenCategorie->name}}</td>
                                    <td>{{ $item->getOrdenService->package_name}}</td>
                                    <td>{{ $item->total}}</td>
                                    @if ($item->status == 'Pendiente')
                                    <td> <a class=" btn btn-info text-white text-bold-600">Pendiente</a></td>
                                    @elseif($item->status == 'Completada')
                                    <td> <a class=" btn btn-success text-white text-bold-600">Completada</a></td>
                                    @elseif($item->status == 'Rechazada')
                                    <td> <a class=" btn btn-danger text-white text-bold-600">Rechazada</a></td>
                                    @elseif($item->status == 'Cancelada')
                                    <td> <a class=" btn btn-warning text-white text-bold-600">Cancelada</a></td>
                                    @endif
                                    <td>{{ $item->link}}</td>
                                    <td>{{ $item->created_at}}</td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{-- permite llamar a las opciones de las tablas --}}
@include('layouts.componenteDashboard.optionDatatable')


