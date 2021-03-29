@extends('layouts.dashboard')

@section('content')
<div id="record">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <h1>Historial de Pedidos</h1>
                        <p>Para ver mas información dar click -> <img src="{{asset('assets/img/sistema/btn-plus.png')}}" alt=""></p>
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">

                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Monto</th>
                                    <th>Fee cobrado</th>
                                    <th>Metodo de Pago</th>
                                    <th>Fecha de Creacion</th>
                                </tr>

                            </thead>
                            <tbody>

                                @foreach ($saldo as $item)
                                <tr class="text-center">
                                    <td> {{ $item->id }}</td>
                                    <td> {{$item->getUser->fullname}} </td>
                                    <td> {{ $item->saldo }}</td>

                                    @if ($item->metodo_pago == 'Stripe')
                                    <td> 10% </td>
                                    @elseif($item->metodo_pago == 'Skrill')
                                    <td> 10% </td>
                                    @elseif($item->metodo_pago == 'Payu')
                                    <td> 10% </td>
                                    @elseif($item->metodo_pago == 'Coinbase')
                                    <td> 2% </td>
                                    @endif
                                    
                                    @if ($item->metodo_pago == 'Stripe')
                                    <td><img src="{{asset('assets/img/sistema/stripe1.png')}}" height="40" width="80"></td>
                                    @elseif($item->metodo_pago == 'Skrill')
                                    <td><img src="{{asset('assets/img/sistema/skrill1.png')}}" height="20" width="60"></td>
                                    @elseif($item->metodo_pago == 'Payu')
                                    <td><img src="{{asset('assets/img/sistema/payu1.png')}}" height="50" width="90"></td>
                                    @elseif($item->metodo_pago == 'Coinbase')
                                    <td><img src="{{asset('assets/img/sistema/coinbase1.png')}}" height="40" width="110"></td>
                                    @endif

                                    <td>{{$item->fecha_creacion}}</td>
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


