@extends('layouts.dashboard')

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
                            
                            <tbody>

                            @foreach ($user as $key => $item)                                

                                <tr class="text-center">
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->referidos }}</td>                                    
                                    <td>{{ $item->comisiones }}</td>
                                </tr>
                                
                            @endforeach

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


