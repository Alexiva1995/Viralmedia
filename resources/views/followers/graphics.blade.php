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
<script src="{{asset('assets/js/ordenGraphics.js')}}"></script>
@endpush

@section('content')

<div id="admingraphics">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <h1>Registro Grafico</h1>
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
                                    <p class="text-left"><b>Servicio:</b> {{ $item->getOrdenService->package_name}}</p>
                                    <p class="text-left"><b>Usuario:</b> <a href="{{ $item->link}}" target="_blank">{{ $item->getOrdenUser->fullname}}</a></p>
                                    <p class="text-left"><b>Email:</b> {{ $item->getOrdenUser->email}}</p>
                                    <p class="text-left"><b>Fecha de Creacion:</b> {{ $item->created_at}}</p>
                                    <p class="text-left"><b>Link:</b> {{ $item->link}}</p>
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
                                    <td><a href="{{ route('graphics.edit',$item->id) }}" class="btn btn-secondary text-bold-600">Revisar</a>
                                        <button class="btn btn-danger" onclick="vm_ordenGraphics.deleteData('{{$item->id}}')">
                                            <form action="{{route('graphics.destroy', $item->id)}}" method="post" id="delete{{$item->id}}">
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





{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

<div id="followers">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <canvas id="myChart" width="400" height="200"></canvas>

                </div>
            </div>
        </div>
    </div>
    
</div>


<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255,1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script> --}}

@endsection

{{-- permite llamar a las opciones de las tablas --}}
@include('layouts.componenteDashboard.optionDatatable')



