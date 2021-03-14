@extends('layouts.dashboard')

@section('content')


@section('content')

<section class="multiple-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Atendiendo la orden #{{ $orden->id}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form id="contact-form" method="POST" action="{{ route('record_order.update', $orden->id)}}"
                            role="form">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Nombre del Usuario</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{ $orden->getOrdenUser->fullname}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Email</label>
                                            <input type="email" class="form-control" readonly
                                                value="{{ $orden->getOrdenUser->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Whatsapp</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{ $orden->getOrdenUser->whatsapp}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Categoria</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{ $orden->getOrdenCategorie->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Servicio</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{ $orden->getOrdenService->package_name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Monto de la Orden</label>
                                            <input type="text" class="form-control" readonly value="{{ $orden->total}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Fecha de Creacion</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{ $orden->created_at}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="status">Estado de la Orden <span
                                                    class="text-danger">OBLIGATORIO</span></label>
                                            <select name="status" id="status"
                                                class="custom-select status @error('status') is-invalid @enderror"
                                                required data-toggle="select">
                                                @if ( $orden->status == 0 )
                                                <option value="{{ $orden->status }}">En Espera</option>
                                                <option value="1">Completada</option>
                                                <option value="2">Rechazada</option>
                                                <option value="3">Cancelada</option>
                                                @elseif($orden->status == 1)
                                                <option value="{{ $orden->status }}">Completada</option>
                                                <option value="0">En Espera</option>
                                                <option value="2">Rechazada</option>
                                                <option value="3">Cancelada</option>

                                                @elseif($orden->status == 2)
                                                <option value="{{ $orden->status }}">Rechazada</option>
                                                <option value="0">En Espera</option>
                                                <option value="1">Completada</option>
                                                <option value="3">Cancelada</option>

                                                @elseif($orden->status == 3)
                                                <option value="{{ $orden->status }}">Cancelada</option>
                                                <option value="0">En Espera</option>
                                                <option value="1">Completada</option>
                                                <option value="2">Rechazada</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- permite llamar a las opciones de las tablas --}}
@include('layouts.componenteDashboard.optionDatatable')
