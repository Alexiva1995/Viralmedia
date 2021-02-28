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
<script src="{{asset('assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('assets/js/core/app.js')}}"></script>
<script src="{{asset('assets/js/scripts/components.js')}}"></script>
<script src="{{asset('assets/js/scripts/pages/account-setting.js')}}"></script>
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
                            <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                                href="#account-vertical-general" aria-expanded="true">
                                <i class="feather icon-user mr-50 font-medium-3"></i>
                                Datos personales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill"
                                href="#account-vertical-info" aria-expanded="false">
                                <i class="feather icon-info mr-50 font-medium-3"></i>
                                Más información
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill"
                                href="#account-vertical-social" aria-expanded="false">
                                <i class="feather icon-link mr-50 font-medium-3"></i>
                                Tu clave API
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                                href="#account-vertical-password" aria-expanded="false">
                                <i class="feather icon-lock mr-50 font-medium-3"></i>
                                Change Password
                            </a>
                        </li>
                    </ul>
                </div>



                <!-- right content section -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                        aria-labelledby="account-pill-general" aria-expanded="true">
                                        <div class="media">
                                            <a href="javascript: void(0);">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg"
                                                    class="rounded mr-75" alt="profile image" height="64" width="64">
                                            </a>
                                            <div class="media-body mt-75">
                                                <div
                                                    class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                    <label
                                                        class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light"
                                                        for="account-upload">Subir foto</label>
                                                    <input type="file" id="account-upload" hidden="">
                                                    <button
                                                        class="btn btn-sm btn-outline-warning ml-50 waves-effect waves-light">Remover</button>
                                                </div>
                                                <p class="text-muted ml-75 mt-50"><small>Se permiten JPG, GIF o PNG.
                                                        Tamaño máximo de 800kB</small></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <form action="{{ route('users.update', $user->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="name">Nombre</label>
                                                            <input type="text" class="form-control" id="name"
                                                                placeholder="Nombre" value="{{ $user->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="last_name">Apellido</label>
                                                            <input type="text" class="form-control" id="last_name"
                                                                placeholder="Apellido" value="{{ $user->last_name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-e-mail">Email</label>
                                                            <input type="email" class="form-control" id="account-e-mail"
                                                                placeholder="Email" value="{{ $user->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-e-mail">Email</label>
                                                            <input type="email" class="form-control" id="account-e-mail"
                                                                placeholder="Email" value="{{ $user->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="account-company">Zona horaria</label>
                                                        <select type="text" class="form-control" id="account-company"
                                                            placeholder="Company name">
                                                            <option>1</option>
                                                            <option>1</option>
                                                            <option>1</option>
                                                            <option>1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>





                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                        aria-labelledby="account-pill-info" aria-expanded="false">
                                        <form novalidate="">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <h2 class="font-weight-bold">Más información</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-phone">Website</label>
                                                            <input type="text" class="form-control" id="account-phone"
                                                                required="" placeholder="Phone number" value=""
                                                                data-validation-required-message="This phone number field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-phone">Telefono</label>
                                                            <input type="text" class="form-control" id="account-phone"
                                                                required="" placeholder="Phone number" value=""
                                                                data-validation-required-message="This phone number field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="whatsapp">WhatsApp</label>
                                                            <input type="text" class="form-control" id="whatsapp"
                                                                required="" placeholder="whatsapp"
                                                                value="{{ $user->whatsapp }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-phone">Dirección</label>
                                                            <input type="text" class="form-control" id="account-phone"
                                                                required="" placeholder="Phone number" value=""
                                                                data-validation-required-message="This phone number field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <h6 class="font-weight-bold"><span class="text-danger">Nota:
                                                                </span> Si no quieres añadir mas información deja estos
                                                                espacios en blanco.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                                        aria-labelledby="account-pill-social" aria-expanded="false">
                                        <form>
                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <h2 class="font-weight-bold">Tu clave API</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="account-twitter">Twitter</label>
                                                        <input type="text" id="account-twitter" class="form-control"
                                                            placeholder="Add link" value="https://www.twitter.com">
                                                    </div>
                                                </div>
                                                <div class="col-6 mt-2">
                                                    <button type="submit"
                                                        style="background-color:#D61167; border-color:#D61167; color:#fff;"
                                                        class="btn mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Generar
                                                        nueva</button>
                                                </div>

                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                        aria-labelledby="account-pill-password" aria-expanded="false">
                                        <form novalidate="">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-old-password">Contraseña
                                                                anterior</label>
                                                            <input type="password" class="form-control"
                                                                id="account-old-password" required=""
                                                                placeholder="Old Password"
                                                                data-validation-required-message="This old password field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-new-password">Nueva Contraseña</label>
                                                            <input type="password" name="password"
                                                                id="account-new-password" class="form-control"
                                                                placeholder="New Password" required=""
                                                                data-validation-required-message="The password field is required"
                                                                minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-retype-new-password">Repetir
                                                                contraseña</label>
                                                            <input type="password" name="con-password"
                                                                class="form-control" required=""
                                                                id="account-retype-new-password"
                                                                data-validation-match-match="password"
                                                                placeholder="New Password"
                                                                data-validation-required-message="The Confirm password field is required"
                                                                minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <h6 class="font-weight-bold"><span class="text-danger">Nota:
                                                                </span> Si no quieres añadir mas información deja estos
                                                                espacios en blanco.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account setting page end -->

    </div>
</div>
@endsection
