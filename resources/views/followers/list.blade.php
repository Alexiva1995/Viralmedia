@extends('layouts.dashboard')

@section('content')


@section('content')
<div id="follower-list">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>ID</th>
                                    <th># de seguidor</th>
                                    <th>Nombre</th>                                   
                                    <th>Pais</th>
                                    <th>Fecha de inicio</th>                    
                                    <th>Red</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td> 1</td>
                                    <td> 500</td>
                                     <td>Test</td>
                                     <td> Vzla</td>
                                    <td> 22/12/20</td>                                    
                                    <td> Facebook</td>
                                    
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


