@extends('layouts.dashboard')

@section('content')

<div id="record">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <h1>Lista de Usuarios</h1>
                        <p>Para ver mas información dar click -> <img src="{{asset('assets/img/sistema/btn-plus.png')}}" alt=""></p>
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>ID</th>
                                    <th>Perfil</th>
                                    <th>Email</th>
                                    <th>Fondo</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Fecha de Creacion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                            <tbody>
                                 @foreach ($user as $item)
                                <tr class="text-center">
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->fullname}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>{{ $item->balance}}</td>

                                    @if ($item->admin == '1')
                                    <td><a class=" btn btn-success text-white text-bold-600">Administrador</a></td>
                                    @else
                                    <td><a class=" btn btn-secondary text-white text-bold-600">Normal</a></td>
                                    @endif

                                    @if ($item->status == '0')
                                    <td> <a class=" btn btn-info text-white text-bold-600">Inactivo</a></td>
                                    @elseif($item->status == '1')
                                    <td> <a class=" btn btn-success text-white text-bold-600">Activo</a></td>
                                    @elseif($item->status == '2')
                                    <td> <a class=" btn btn-warning text-white text-bold-600">Suspendido</a></td>
                                    @elseif($item->status == '3')
                                    <td> <a class=" btn btn-danger text-white text-bold-600">Bloqueado</a></td>
                                    @elseif($item->status == '4')
                                    <td> <a class=" btn btn-danger text-white text-bold-600">Caducado</a></td>
                                    @elseif($item->status == '5')
                                    <td> <a class=" btn btn-danger text-white text-bold-600">Eliminado</a></td>
                                    @endif
                                    <td>{{ $item->created_at}}</td>
                                    <td><a href="{{ route('users.edit-user',$item->id) }}" class="btn btn-secondary text-bold-600">Editar</a></td>
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


