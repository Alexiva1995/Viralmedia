@extends('layouts.termino')

@section('content')
<div class="col-12 p-2 text-center" style="background: #705adc">
    <img src="https://viralmediapanel.com/themes/pergo/views/html-recursos/imagenes/logo-viral_media-blanco.png" alt="">
</div>
<div class="container text-center">

    {{-- Primera --}}
    @include('terminos_condiciones.clausulas.primera')
    {{-- Fin Primera --}}

    {{-- Segunda --}}
    @include('terminos_condiciones.clausulas.segunda')
    {{-- Fin Segunda --}}

    {{-- Tercera --}}
    @include('terminos_condiciones.clausulas.tercera')
    {{-- Fin Tercera --}}

    {{-- Cuarto --}}
    @include('terminos_condiciones.clausulas.cuarta')
    {{-- Fin Cuarto --}}

    {{-- Quinto --}}
    @include('terminos_condiciones.clausulas.quinta')
    {{-- Fin Quinto --}}

    {{-- Sexta --}}
    @include('terminos_condiciones.clausulas.sexta')
    {{-- Fin Sexta --}}

    {{-- Septima --}}
    @include('terminos_condiciones.clausulas.septima')
    {{-- Fin Septima --}}

    {{-- Octava --}}
    @include('terminos_condiciones.clausulas.septima')
    {{-- Fin Octava --}}
</div>
@endsection
