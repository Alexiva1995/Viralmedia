@extends('layouts.auth')

@section('content')
@push('custom_css')
<style>
    .bg-fucsia {
        background: transparent linear-gradient(0deg, #6736CD 0%, #7364E0 100%) 0% 0% no-repeat padding-box;
    }

    .text-rosado {
        color: #FF3366;
    }

    .bg-full-screen-image-alt{
        background: url("{{asset('assets/img/sistema/fondo-registro.png')}}") !important;
        background-size: 100% 60% !important;
        background-repeat: no-repeat !important;
    }

    .btn-login {
        padding: 0.6rem 2rem;
        border-radius: 1.429rem;
    }

    .text-input-holder {
        font-weight: 800;
        color: #000000;
    }

    .card{
        border-radius: 1.5rem;
    }
</style>
@endpush

@php
$referred = null;
@endphp
@if ( request()->referred_id != null )
@php
$referred = DB::table('users')
->select('fullname')
->where('ID', '=', request()->referred_id)
->first();
@endphp
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-8 col-12">
            {{-- header --}}
            <div class="col-12 text-center mt-3 mb-2">
                <img src="{{asset('assets/img/sistema/logo-viral_media-blanco.png')}}" alt="logo" height="40" class="mb-3">
                <h5 class="text-white">Bienvenido a <br> ViralMediaPanel</h5>
            </div>
            {{-- cuerpo register --}}
            <div class="card mb-0 card-margin">
                <div class="card-header">
                    <h5 class="card-title text-center col-12 text-input-holder">{{ __('Registrar') }}</h5>
                    @if (!empty($referred))
                        <h6 class="text-center col-12">Registro Referido por {{$referred->fullname}}</h6>
                    @endif
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- campo referido --}}
                        @if ( request()->referred_id != null )
                            <input type="hidden" name="referred_id" value="{{request()->referred_id}}">
                        @else
                            <input type="hidden" name="referred_id" value="1">
                        @endif
                        
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre y Apellido">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electronico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6 col-12">
                                <select name="code" id="" class="form-control custom-select @error('code') is-invalid @enderror">
                                    <option value="" disabled selected>Seleccione un Codigo</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->phone_prefix}}">{{$country->name}} +{{$country->phone_prefix}}</option>
                                    @endforeach
                                </select>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="number" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp" autofocus placeholder="Whatsapp">

                                @error('whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingrese una contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirme su contraseña">
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-5">
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn bg-fucsia text-white btn-block btn-login">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>
                        </div>

                        <fieldset class="checkbox mt-1 ml-2">
                            <div class="vs-checkbox-con vs-checkbox-primary float-left justify-content-center">
                                <input type="checkbox" name="term" id="term"
                                    {{ old('term') ? 'checked' : '' }}>
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                @error('term')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                            <span class="">Acepto los <a href="{{ route('term') }}">Terminos y Condiciones</a></span>
                        </fieldset>

                    </form>
                </div>
            </div>
            <div class="col-12">
                <p class="text-center">
                    <small >
                        <span>¿Ya tienes una cuenta?</span>
                        <br>
                        <a class="text-rosado" href="{{ route('login') }}">
                            {{ __('Inicia sesión') }}
                        </a>
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
