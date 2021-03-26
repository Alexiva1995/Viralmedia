
@extends('layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('assets/app-assets/css/plugins/forms/validation/form-validation.css')}}">

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

@endpush

@push('custom_js')
<script>

$(document).ready(function() {
        @if(!$config->getMedia('icon')->isEmpty())
            @if(in_array($config->getMedia('icon')->first()->mime_type,array("image/png", "image/gif", "image/jpeg")))
              previewPersistedFile("{{ $config->getMedia('icon')->first()->file }}", 'icon_preview');
            @endif
          @endif
      });

    //  icono pestaña

    function previewIcon(input, icon_preview) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#" + icon_preview).attr('src', e.target.result);
                $("#" + icon_preview).css('height', '300px');
                $("#" + icon_preview).parent().parent().removeClass('d-none');
            }
            $("label[for='" + $(input).attr('id') + "']").text(input.files[0].name);
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewPersistedIcon(url, icon_preview) {
        $("#" + icon_preview).attr('src', url);
        $("#" + icon_preview).css('height', '300px');
        $("#" + icon_preview).parent().parent().removeClass('d-none');

    }

       // logo menu

    $(document).ready(function() {
        @if(!$config->getMedia('photo')->isEmpty())
            @if(in_array($config->getMedia('photo')->first()->mime_type,array("image/png", "image/gif", "image/jpeg")))
              previewPersistedFile("{{ $config->getMedia('photo')->first()->file }}", 'photo_preview');
            @endif
          @endif
      });


     function previewFile(input, preview_id) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();
             reader.onload = function (e) {
                 $("#" + preview_id).attr('src', e.target.result);
                 $("#" + preview_id).css('height', '200px');
                 $("#" + preview_id).parent().parent().removeClass('d-none');
             }
             $("label[for='" + $(input).attr('id') + "']").text(input.files[0].name);
             reader.readAsDataURL(input.files[0]);
         }
     }

     function previewPersistedFile(url, preview_id) {
         $("#" + preview_id).attr('src', url);
         $("#" + preview_id).css('height', '200px');
         $("#" + preview_id).parent().parent().removeClass('d-none');

     }

</script>

<script>
    $(document).ready(function () {
        
    var quill = new Quill('#editor', {
        modules: {
        toolbar: [
            [{ "font": [] }, { "size": ["small", false, "large", "huge"] }], // custom dropdown

            ["bold", "italic", "underline", "strike"],

            [{ "color": [] }, { "background": [] }],

            [{ "script": "sub" }, { "script": "super" }],

            [{ "header": 1 }, { "header": 2 }, "blockquote", "code-block"],

            [{ "list": "ordered" }, { "list": "bullet" }, { "indent": "-1" }, { "indent": "+1" }],

            [{ "direction": "rtl" }, { "align": [] }],

            ["link", "image", "video", "formula"],

            ["clean"]
        ]
    },
    theme: 'snow'
    });

    quill.on('text-change', function(delta, oldDelta, source) {
      $('#editor-textarea').text($(".ql-editor").html());
});

    });

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
                                <i class="feather icon-globe mr-50 font-medium-3"></i>
                                Logo de la Pagina
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill"
                                href="#account-vertical-info" aria-expanded="false">
                                <i class="feather icon-layout mr-50 font-medium-3"></i>
                                Ajustes de la Pagina
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill"
                                href="#account-vertical-social" aria-expanded="false">
                                <i class="feather icon-book mr-50 font-medium-3"></i>
                                Terminos y Politica de la pagina
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


                                        <form action="{{ route('general.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group text-center text-center">
                                                <div class="controls">
                                                    <h2 class="font-weight-bold"><i
                                                            class="feather text-primary icon-globe mr-50 font-medium-10"></i>
                                                        Icono
                                                        de la pestaña</h2>
                                                    <br>
                                                    <h2 class="font-weight-bold text-primary">↶ Ejemplo ↷</h2>
                                                    <br>
                                                    <img src="{{asset('assets/img/sistema/logo_chrome.png')}}" alt="">

                                                </div>
                                            </div>

                                            <div class="media mt-3">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="icon">Seleccione el Icono
                                                        <b>(Se
                                                            permiten JPG, PNG y ICO.
                                                            Resolucion Maxima recomendada 126X126 )</b></label>
                                                    <input type="file" id="icon"
                                                        class="custom-file-input @error('icon') is-invalid @enderror"
                                                        name="icon" onchange="previewIcon(this, 'icon_preview')"
                                                        accept="image/*">
                                                    @error('icon')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-4 mt-4 d-none" id="icon_preview_wrapper">
                                                <div class="col"></div>
                                                <div class="col-auto">
                                                    <img id="icon_preview" class="img-fluid rounded" />
                                                </div>
                                                <div class="col"></div>
                                            </div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
                                            </div>

                                            <hr class="text-primary mt-4 mb-4"
                                                style="border: 3px solid ; border-radius: 3px;">


                                            <div class="form-group text-center text-center">
                                                <div class="controls">
                                                    <h2 class="font-weight-bold"><i
                                                            class="feather text-primary icon-sidebar mr-50 font-medium-10"></i>
                                                        Logo del menu Lateral</h2>
                                                    <br>
                                                    <h2 class="font-weight-bold text-primary">↶ Ejemplo ↷</h2>
                                                    <br>
                                                    <img src="{{asset('assets/img/sistema/logosidebar.png')}}" alt="">

                                                </div>
                                            </div>

                                            <div class="media mt-3">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="photo">Seleccione el Logo
                                                        <b>(Se
                                                            permiten JPG o PNG)</b></label>
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

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
                                            </div>

                                    </div>


                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                        aria-labelledby="account-pill-info" aria-expanded="false">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group text-center">
                                                    <div class="controls">
                                                        <h2 class="font-weight-bold mb-3"><i
                                                                class="feather text-primary icon-layout mr-50 font-medium-10"></i>
                                                            Ajustes de la Pagina</h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label class="h5">Nombre de la pestaña del
                                                            navegador</label>
                                                        <input type="text" class="form-control" id="title" name="title"
                                                            placeholder="Title" value="{{$config->title}}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label class="h5">Estado de la pagina</label>
                                                        <select id="status" class="form-control" name="status">
                                                            <option value="0" @if($config->status === '0')
                                                                selected @endif>Mantenimiento</option>
                                                            <option value="1" @if($config->status === '1')
                                                                selected @endif>Produccion</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label class="h5">Descripción de la pagina</label>
                                                        <textarea type="text" class="form-control" id="description"
                                                            name="description" rows="4" cols="50"
                                                            placeholder="Description">{{$config->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label class="h5">Palabras clave del sitio web</label>
                                                        <textarea type="text" class="form-control" id="keyword"
                                                            name="keyword" rows="4" cols="50"
                                                            placeholder="ViralMediaPanel, socialmedia">{{$config->keyword}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                                        aria-labelledby="account-pill-social" aria-expanded="false">



                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group text-center">
                                                    <div class="controls">
                                                        <h2 class="font-weight-bold mb-3"><i
                                                                class="feather text-primary icon-book mr-50 font-medium-10"></i>
                                                            Terminos y Politica de la pagina</h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group text-center">
                                                    <div class="mb-4" id="editor" name="term">{!! $config->term
                                                        !!}</div>
                                                    <textarea type="textarea" name="term" id="editor-textarea"
                                                        style="display: none;">{{$config->term}}</textarea>
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
        </section>
    </div>
</div>
@endsection
