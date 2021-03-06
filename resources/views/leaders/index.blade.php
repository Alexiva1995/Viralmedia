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
                                    <th>Usuario</th>
                                    <th>Referidos</th>
                                    <th>Total de Comisiones</th>
                                </tr>
                            </thead> 
                            @foreach ($user as $key => $item)                                
                            <tbody>
                                <tr class="text-center">
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->referidos }}</td>                                    
                                    <td>FALTA</td>
                                </tr>
                            </tbody>
                            @endforeach
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


