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
      $(document).ready(function() {
       

          @if(!$user->getMedia('photo')->isEmpty())
          previewPersistedFile('{{ $user->getMedia('photo')->first()->file }}', 'photo_preview');
        @endif
      });

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
                            <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                                href="#account-vertical-general" aria-expanded="true">
                                <i class="feather icon-user mr-50 font-medium-3"></i>
                                Datos personales
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill"
                                href="#account-vertical-info" aria-expanded="false">
                                <i class="feather icon-info mr-50 font-medium-3"></i>
                                Más información
                            </a>
                        </li> --}}
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
                                Cambiar la contraseña
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

                                        <form action="{{ route('profile.update',$user->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="media">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="photo">Seleccione su
                                                        Foto <b>(Se permiten JPG o PNG.
                                                        Tamaño máximo de 800kB)</b></label>
                                                    <input type="file" id="photo"
                                                        class="custom-file-input @error('photo') is-invalid @enderror"
                                                        name="photo" onchange="previewFile(this, 'photo_preview')"
                                                        accept="image/*">
                                                    @error('photo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-4 mt-4 d-none" id="photo_preview_wrapper">
                                                <div class="col"></div>
                                                <div class="col-auto">
                                                  <img id="photo_preview" class="img-fluid rounded" />
                                                </div>
                                                <div class="col"></div>
                                            </div>
                                            
                                            <hr>
                                         
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <h2 class="font-weight-bold">Datos Personales</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label class="required" for="">Nombre</label>
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                id="name" name="name" placeholder="Nombre"
                                                                value="{{ $user->name }}">
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label class="required" for="last_name">Apellido</label>
                                                            <input type="text"
                                                                class="form-control @error('last_name') is-invalid @enderror"
                                                                id="last_name" name="last_name" placeholder="Apellido"
                                                                value="{{ $user->last_name }}">
                                                            @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label class="required" for="email">Email</label>
                                                            <input type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                id="email" name="email" placeholder="Email"
                                                                value="{{ $user->email }}">
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="required" for="utc">Zona horaria (Capital del
                                                            Pais)</label>
                                                        <select type="text"
                                                            class="form-control @error('utc') is-invalid @enderror"
                                                            id="utc" name="utc">
                                                            <option value="{{ $user->utc }}">{{ $user->utc }}</option>
                                                            @foreach ($timezone as $zone)
                                                            <option value="{{ $zone->list_utc }}">{{ $zone->list_utc }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        @error('utc')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <h2 class="font-weight-bold">Más Información</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="controls">
                                                            <label class="required" for="account-phone">Website</label>
                                                            <input type="text"
                                                                class="form-control @error('website') is-invalid @enderror"
                                                                id="website" name="website"
                                                                placeholder="https://tupagina.com"
                                                                value="{{ $user->website}}">
                                                            @error('website')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label class="required" for="whatsapp">Telefono</label>
                                                            <input type="text"
                                                                class="form-control @error('whatsapp') is-invalid @enderror"
                                                                name="whatsapp" value="{{ $user->whatsapp }}"
                                                                placeholder="whatsapp">
                                                            @error('whatsapp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label class="required" for="address">Dirección</label>
                                                            <textarea type="text"
                                                                class="form-control @error('address') is-invalid @enderror"
                                                                id="address"
                                                                name="address">{{ $user->address}}</textarea>
                                                            @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <h6 class="font-weight-bold"><span class="text-danger">Nota:
                                                                </span> Si no quieres añadir <span
                                                                    class="text-danger">Más Información</span> deja
                                                                estos
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

                                    {{-- 
                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                        aria-labelledby="account-pill-info" aria-expanded="false">
                                        <form action="{{ route('profile.update',$user->id) }}" method="POST">
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
                                                @csrf
                                                @method('PATCH')
                                                <div class="controls">
                                                    <label class="required" for="account-phone">Website</label>
                                                    <input type="text"
                                                        class="form-control @error('website') is-invalid @enderror"
                                                        id="website" name="website" value=""
                                                        placeholder="https://tupagina.com" value="">
                                                    @error('website')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label class="required" for="whatsapp">Telefono</label>
                                                    <input type="text"
                                                        class="form-control @error('whatsapp') is-invalid @enderror"
                                                        name="whatsapp" value="{{ $user->whatsapp }}"
                                                        placeholder="Whatsapp">
                                                    @error('whatsapp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label class="required" for="address">Dirección</label>
                                                    <textarea type="text"
                                                        class="form-control @error('address') is-invalid @enderror"
                                                        id="address" value="" name="address">  </textarea>
                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
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
                                </div> --}}


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
                                                    <label for="account-api">API</label>
                                                    <input type="text" id="account-api" class="form-control"
                                                        placeholder="Add link" value="">
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
                                                        <h2 class="font-weight-bold">Cambiar la contraseña</h2>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <input type="password" name="password" id="account-new-password"
                                                            class="form-control" placeholder="New Password" required=""
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
                                                        <input type="password" name="con-password" class="form-control"
                                                            required="" id="account-retype-new-password"
                                                            data-validation-match-match="password"
                                                            placeholder="New Password"
                                                            data-validation-required-message="The Confirm password field is required"
                                                            minlength="6">
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
</div>
</div>
@endsection
