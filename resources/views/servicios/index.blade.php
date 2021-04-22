@extends('layouts.dashboard')

{{-- permite llamar las librerias montadas --}}
@push('page_js')
<script src="{{asset('assets/js/librerias/vue.js')}}"></script>
<script src="{{asset('assets/js/librerias/axios.min.js')}}"></script>
@endpush

{{-- permite agregar js personalizados --}}
@push('custom_js')
<script src="{{asset('assets/js/servicios.js')}}"></script>
@endpush

@section('content')
<div id="servicios">
    {{-- cuerpo --}}
    <div class="container">
        <div class="row">
            {{-- Seccion de Orden --}}
            <div class="col-12 col-sm-6 col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Añadir nueva orden</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('servicios.save.orden')}}" method="POST">
                                @csrf
                                <input type="hidden" name="iduser" value="{{Auth::id()}}">
                                <div class="form-group">
                                    <label for="">Categoria</label>
                                    <select name="categories_id" class="form-control custom-select" v-model="Option.idCategory">
                                        <option value="0" disabled selected>Seleccione una Opcion</option>
                                        <option :value="item.id" v-for="(item, index) in Categories" v-text="item.name" v-on:click="setCategori(index)"></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Orden del servicio</label>
                                    <select name="service_id" id="" class="form-control custom-select" v-model="Option.idService">
                                        <option value="0" disabled selected>Seleccione una Opcion</option>
                                        <option :value="item.id" v-for="(item, index) in Services" v-text="item.package_name+' - '+item.price+'$'" v-on:click="setService(parseInt(index))"></option>
                                    </select>
                                </div>
                                
                                <div class="form-group" v-for="item in Service.input_adicionales">
                                    <label for="" v-text="(item == 'usuario') ? 'Ingrese el usuario sin el arroba (@)' : item">@{{item}}</label>
                                    <input type="text" :name="item" :placeholder="item" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Cantidad</label>
                                    <input type="number" class="form-control" name="cantidad" v-if="(Service.maximum_amount == 1) " value="1" readonly v-model="Total.cantidad = 1">
                                    <input type="number" class="form-control" name="cantidad" v-else value="0" :max="Service.maximum_amount" v-model="Total.cantidad">
                                </div>

                                <div class="form-group">
                                    <label for="">Total a Pagar</label>
                                    <input type="number" class="form-control" name="total" :value="TotalOrden" step="any" readonly>
                                </div>

                                <div class="form-group">
                                    <div class="col-12 d-flex justify-content-center mb-2">
                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" checked="" value="false">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">Leí la descripción y estoy de acuerdo</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn text-white bg-purple-alt2 btn-block padding-button-short">CONFIRMAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Seccion de Orden --}}
            {{-- Seccion de Resume --}}
            <div class="col-12 col-sm-6 col-md-5 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Resumen de la orden</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nombre del servicio</label>
                                <input type="text" class="form-control" readonly v-model="Service.package_name">
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Monto Minimo</label>
                                        <input type="text" class="form-control" readonly v-model="Service.minimum_amount">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Monto Maximo</label>
                                        <input type="text" class="form-control" readonly v-model="Service.maximum_amount">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Precio por 1000 ($)</label>
                                <input type="text" class="form-control" readonly v-model="Service.price">
                            </div>
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <div class="border p-1" v-html="Service.description"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Seccion de Resume --}}
        </div>
    </div>
    {{-- modal de aviso --}}
    @include('servicios.componentes.modalAviso')
</div>
@endsection
