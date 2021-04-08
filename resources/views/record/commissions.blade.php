@extends('layouts.dashboard')

@section('content')
<div id="record">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <h1>Historial de Comisiones</h1>
                        <p>Para ver mas información dar click -> <img src="{{asset('assets/img/sistema/btn-plus.png')}}" alt=""></p>
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">

                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Descripción</th>
                                    <th>Debito</th>
                                    <th>Fecha</th>
                                </tr>

                            </thead>
                            <tbody>

                                @foreach ($billetera as $item)
                                <tr class="text-center">
                                    <td>{{ $item->id}}</td>
                                    <td> {{$item->getWalletUser->fullname}} </td>
                                    <td>{{ $item->descripcion}}</td>
                                    <td>{{ $item->debito}}</td>
                                    <td>{{ $item->created_at}}</td>
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


