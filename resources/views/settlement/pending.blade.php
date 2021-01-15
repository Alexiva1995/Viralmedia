@extends('layouts.dashboard')

@section('content')


@section('content')
<div id="settlement">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">                                
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Pais</th>
                                    <th>Fecha de solicitud </th>
                                    <th>Total</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td> 1</td>
                                    <td> admin</td>
                                    <td> admin</td>
                                    <td> admin@viralmedia.com</td>
                                    <td>test</td>
                                    <td>12/28/2020</td>                                    
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


