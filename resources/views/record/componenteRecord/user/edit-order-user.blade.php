@extends('layouts.dashboard')

@section('content')

<section class="multiple-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editando la orden #{{ $orden->id}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form id="contact-form" method="POST" action="{{ route('record_order.update-user', $orden->id)}}"
                            role="form">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Nombre del Usuario</label>
                                            <input type="text" class="form-control" readonly
                                                value="{{ $orden->getOrdenUser->fullname}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Email</label>
                                            <span class="text-danger">editable</span>
                                            <input type="email" class="form-control" name="email" id="email"
                                                value="{{ $orden->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Whatsapp</label>
                                            <span class="text-danger">editable</span>
                                            <input type="text" class="form-control" name="whatsapp" id="whatsapp"
                                                value="{{ $orden->whatsapp}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Link</label>
                                            <span class="text-danger">editable</span>
                                            <input type="text" class="form-control" name="link" id="link"
                                                value="{{ $orden->link}}">
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
                                            <input type="text" class="form-control" readonly 
                                            value="{{ $orden->total}}">
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
                                <div class="col-12">
                                    <div class="form-group d-flex justify-content-center">
                                        <div class="controls">
                                                @if ( $orden->status == 0 )
                                                <a class=" btn btn-info text-white text-bold-600">En Espera</a>
                                                @elseif($orden->status == 1)
                                                <a class=" btn btn-success text-white text-bold-600">Completada</a>
                                                @elseif($orden->status == 2)
                                                <a class=" btn btn-warning text-white text-bold-600">Rechazada</a>
                                                @elseif($orden->status == 3)
                                                <a class=" btn btn-danger text-white text-bold-600">Cancelada</a>
                                                @endif
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