@extends('layouts.dashboard')

@push('custom_js')

<script>
   
   $(document).ready(function() {
        @if(!$new->getMedia('photo')->isEmpty())
            @if(in_array($new->getMedia('photo')->first()->mime_type,array("image/png", "image/gif", "image/jpeg")))
              previewPersistedFile("{{ $new->getMedia('photo')->first()->file }}", 'photo_preview');
            @endif
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

@endpush

@section('content')

<section id="basic-vertical-layouts">
    <div class="row match-height d-flex justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editando la Noticia #{{$new->id}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route('news.update', $new->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="media">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="photo">Seleccione la
                                        Imangen que se mostrara</label>
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
                         
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Titulo</label>
                                            <input type="text" id="title" class="form-control" name="title" value="{{$new->title}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea type="text" rows="5" id="description" class="form-control"
                                                name="description">{{$new->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Tipo</label>
                                            <select id="type" class="form-control" name="type">
                                                <option value="0" @if($new->type == '0') selected  @endif>Nuevo Servicio</option>
                                                <option value="1" @if($new->type == '1') selected  @endif>Anuncio</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select id="status" class="form-control" name="status">
                                            <option value="0" @if($new->status == '0') selected  @endif>Desactivado</option>
                                            <option value="1" @if($new->status == '1') selected  @endif>Activado</option>
                                            <option value="2" @if($new->status == '2') selected  @endif>Expirado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Fecha de Inicio</label>
                                            <input type="date" class="form-control" id="date_start" name="date_start" value="{{$new->date_start}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Fecha de Expiracion</label>
                                            <input type="date" class="form-control" id="date_end" name="date_end" value="{{$new->date_end}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Actualizar
                                            Noticia</button>
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
