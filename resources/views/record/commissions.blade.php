@extends('layouts.dashboard')

@section('content')


@section('content')
<div id="record">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>ID</th>
                                    <th>Cliente names</th>
                                    <th># Pedido </th>
                                    <th>Estado</th>
                                    <th>Fecha</th>
                                    <th>Total Pedido</th>
                                    <th>Comision</th>
                                    <th>Ganancia</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td> 1</td>
                                    <td> admin</td>
                                    <td> 10</td>
                                    <td>Test</td>
                                    <td> 22/12/20</td>                                    
                                    <td> 1000</td>
                                    <td> 5%</td>
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


