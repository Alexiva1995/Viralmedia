@extends('layouts.dashboard')

@section('content')

<section id="basic-vertical-layouts">
    <div class="row match-height d-flex justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Creacion de Ticket</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route('ticket.store')}}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Email de contacto</label>
                                            <input type="email" id="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Whatsapp de contacto</label>
                                            <input type="text" id="whatsapp" class="form-control" name="whatsapp">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Asunto del Ticket</label>
                                            <input type="text" id="issue" class="form-control" name="issue">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Especifique la situacion</label>
                                            <textarea type="text" rows="5" id="description" class="form-control"
                                                name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Nota del Administrador</label>
                                            <textarea type="text" rows="5" readonly id="note_admin" class="form-control"
                                                name="note_admin">En este campo estara la nota que deja el administrador que atendio su orden</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Enviar
                                            Ticket</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
