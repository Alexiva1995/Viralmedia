@extends('layouts.dashboard')

{{-- vendor css --}}
@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/tether.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">
@endpush

{{-- page css --}}
@push('page_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/pages/dashboard-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/pages/card-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/plugins/tour/tour.css')}}">
@endpush

{{-- page vendor js --}}
@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
@endpush

{{-- page js --}}
@push('page_js')
<script src="{{asset('assets/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<script src="{{asset('assets/app-assets/js/scripts/cards/card-statistics.js')}}"></script>
@endpush

@section('content')
<section id="dashboard-analytics">
    {{-- Primera Seccion --}}
    @include('dashboard.componente.firstsection')
    {{-- Fin Primera Seccion --}}
    {{-- Segundo Seccion --}}
    @include('dashboard.componente.secondsection')
    {{-- Fin Segundo Seccion --}}
    {{-- Tercera Seccion --}}
    @include('dashboard.componente.thirdsection')
    {{-- Fin Tercera Seccion --}}
</section>
@endsection