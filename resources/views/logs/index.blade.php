@extends('layouts.dashboard')

@section('content')


@section('content')
<div id="logs-list">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">                                
                                    <th>ID</th>
                                    <th>Usuario</th>                          
                                    <th>ID de Transación</th>
                                    <th>Metodo de Pago</th>
                                    <th>Monto (Comision Incluida)</th>
                                    <th>Estado</th>
                                    <th>Fecha de Creación</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td> 1</td>
                                    <td> admin</td>
                                    <td>Venezuela</td>                                    
                                    <td>12/28/2020</td>
                                    <td> Retiro</td>
                                    <td> 50</td>
                                    <td> 50</td>
                                    <td> 50</td>
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


