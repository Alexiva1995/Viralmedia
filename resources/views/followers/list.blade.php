@extends('layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/librerias/emojionearea.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush

{{-- permite llamar las librerias montadas --}}
@push('page_js')
<script src="{{asset('assets/js/librerias/vue.js')}}"></script>
<script src="{{asset('assets/js/librerias/axios.min.js')}}"></script>
<script src="{{asset('assets/js/librerias/emojionearea.min.js')}}"></script>
@endpush

@push('custom_js')
<script src="{{asset('assets/js/ordenFollowers.js')}}"></script>
@endpush

@section('content')

<div id="adminfollowers">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <h1>Registro de Seguidores</h1>
                        <p>Para ver mas información dar click -> <img src="{{asset('assets/img/sistema/btn-plus.png')}}" alt=""></p>
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>ID</th>
                                    <th>Datos</th>
                                    <th>Fecha de Creacion</th>
                                    <th>Estado</th>
                                    <th>Accion</th> 
                                </tr>
                            </thead>

                            <tbody>
                                 @foreach ($orden as $item)
                                <tr class="text-center">
                                    <td>{{ $item->id}}</td>
                                    <td>
                                    <p class="text-left"><b>Servicio:</b> {{ $item->getOrdenService->package_name}}</p>
                                    <p class="text-left"><b>Cantidad de Servicios:</b> {{ $item->cantidad}}</p>
                                    <p class="text-left"><b>Usuario:</b> <a href="{{ $item->link}}" target="_blank">{{ $item->getOrdenUser->fullname}}</a></p>
                                    <p class="text-left"><b>Seguidores Inicial:</b> {{ $item->count_start}}</p>
                                    <p class="text-left"><b>Seguidores Adicional:</b> {{ $item->count_end}}</p>
                                    <p class="text-left"><b>Seguidores Final:</b> {{ $item->count_start + $item->count_end}}</p>
                                    @if ($item->status == '0')
                                    <p class="text-left"><a class="btn btn-danger text-white text-bold-600" href="{{ $item->link}}" target="_blank">FALTA</a></p>
                                    @elseif ($item->status == '1')
                                    <p class="text-left"><a class="btn btn-success text-white text-bold-600" href="{{ $item->link}}" target="_blank">LISTO</a></p>
                                    @endif
                                    <p class="text-left"><b>Email:</b> {{ $item->getOrdenUser->email}}</p>
                                    </td>
                                    @if ($item->status == '0')
                                    <td> <a class=" btn btn-info text-white text-bold-600">En Espera</a></td>
                                    @elseif($item->status == '1')
                                    <td> <a class=" btn btn-warning text-white text-bold-600">Incompleto</a></td>
                                    @elseif($item->status == '2')
                                    <td> <a class=" btn btn-success text-white text-bold-600">Completada</a></td>
                                    @elseif($item->status == '3')
                                    <td> <a class=" btn btn-danger text-white text-bold-600">Cancelada</a></td>
                                    @endif
                                    <td>{{ $item->created_at}}</td>
                                    <td>
                                    <a href="{{ route('followers.edit',$item->id) }}" class="btn btn-secondary text-bold-600">Revisar</a>
                                    <button class="btn btn-danger" onclick="vm_ordenFollowers.deleteData('{{$item->id}}')">
                                        <form action="{{route('followers.destroy', $item->id)}}" method="post" id="delete{{$item->id}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </td>
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



