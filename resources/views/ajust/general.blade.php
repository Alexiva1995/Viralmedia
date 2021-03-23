@extends('layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('assets/app-assets/css/plugins/forms/validation/form-validation.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
@endpush

@push('custom_js')
<script>
    function previewFile(input, preview_id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#" + preview_id).attr('src', e.target.result);
                $("#" + preview_id).css('height', '300px');
                $("#" + preview_id).parent().parent().removeClass('d-none');
            }
            $("label[for='" + $(input).attr('id') + "']").text(input.files[0].name);
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewPersistedFile(url, preview_id) {
        $("#" + preview_id).attr('src', url);
        $("#" + preview_id).css('height', '300px');
        $("#" + preview_id).parent().parent().removeClass('d-none');

    }

</script>


<script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('assets/app-assets/js/scripts/components.js')}}"></script>
@endpush

@section('content')

<div class="app-content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-body">
        <!-- account setting page start -->
        <section id="page-account-settings">
            <div class="row">
                <!-- left menu section -->
                <div class="col-md-3 mb-2 mb-md-0">
                    <ul class="nav nav-pills flex-column mt-md-0 mt-1">

                        <li class="nav-item">
                            <a class="nav-link d-flex py-75 active" id="general-pill" data-toggle="pill"
                                href="#general" aria-expanded="true">
                                <i class="feather icon-settings mr-50 font-medium-3"></i>
                                Ajustes de la web
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="logo-pill" data-toggle="pill"
                                href="#logo" aria-expanded="false">
                                <i class="feather icon-globe mr-50 font-medium-3"></i>
                                logo de la web
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="term-pill" data-toggle="pill"
                                href="#term" aria-expanded="false">
                                <i class="feather icon-info mr-50 font-medium-3"></i>
                                Terminos y Condiciones
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="general"
                                        aria-labelledby="general-pill" aria-expanded="true">
                                        @include('ajust.general-component.settings')
                                    </div>

                                    <div class="tab-pane fade" id="logo" role="tabpanel"
                                        aria-labelledby="logo-pill" aria-expanded="false">
                                        @include('ajust.general-component.logo')
                                    </div>

                                    <div class="tab-pane fade " id="term" role="tabpanel"
                                        aria-labelledby="term-pill" aria-expanded="false">
                                        @include('ajust.general-component.term')
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
