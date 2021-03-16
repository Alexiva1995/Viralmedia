@extends('layouts.dashboard')

@section('content')


@section('content')
<div id="users-list">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">                                
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th>Codigo</th>
                                    <th>Icono</th>
                                    <th>Por Defecto</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Español</td>
                                    <td>ES</td>
                                    <td><img src="{{asset('assets/img/sistema/es.png')}}" width="30" height="30" alt=""></td>
                                    <td>Si</td>                                    
                                    <td>2019-11-18 22:00:08</td> 
                                    <td>Activo</td> 
                                </tr>
                               
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


