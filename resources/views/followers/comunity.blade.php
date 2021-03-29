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
<script src="{{asset('assets/js/ordenComunity.js')}}"></script>
@endpush

@section('content')

<div id="admincomunity">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <h1>Registro Comunity</h1>
                        <p>Para ver mas información dar click -> <img src="{{asset('assets/img/sistema/btn-plus.png')}}" alt=""></p>
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            
                            <thead class="">
                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>ID</th>
                                    <th>Datos</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                            <tbody>
                                 @foreach ($orden as $item)
                                <tr class="text-center">
                                    <td>{{ $item->id}}</td>
                                    <td>
                                    <p class="text-left"><b>Usuario:</b> {{ $item->getOrdenUser->fullname}}</p>
                                    <p class="text-left"><b>Email:</b> {{ $item->getOrdenUser->email}}</p>
                                    <p class="text-left"><b>Fecha de Creacion:</b>{{ $item->created_at}}}</p>
                                    </td>
                                    @if ($item->status == '0')
                                    <td> <a class=" btn btn-info text-white text-bold-600">Sin contacto</a></td>
                                    @elseif($item->status == '1')
                                    <td> <a class=" btn btn-success text-white text-bold-600">En dialogo</a></td>
                                    @endif
                                    <td><a href="{{ route('comunity.edit',$item->id) }}" class="btn btn-secondary text-bold-600">Revisar</a>
                                        <button class="btn btn-danger" onclick="vm_ordenComunity.deleteData('{{$item->id}}')">
                                            <form action="{{route('comunity.destroy', $item->id)}}" method="post" id="delete{{$item->id}}">
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



