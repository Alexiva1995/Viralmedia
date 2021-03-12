@extends('layouts.dashboard')

@section('content')


@section('content')
<div id="leaders">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>Ranking</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Pais</th>
                                    <th>Cantidad de referidos</th>
                                    <th>Balance</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td> 1</td>
                                    <td> 1</td>
                                    <td> admin</td>
                                    <td> admin@viralmedia.com</td>
                                    <td>Venezuela</td>
                                    <td> 50</td>                                    
                                    <td> 1000</td>
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


