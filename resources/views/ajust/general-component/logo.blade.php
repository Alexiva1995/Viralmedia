<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="col-12">
        <div class="form-group">
            <div class="controls">
                <h2 class="font-weight-bold">Logo del navegador (Pestaña del navegador)</h2>
                <p>Ejemplo -> <img src="{{asset('assets/img/sistema/logo_chrome.png')}}" alt=""></p>

            </div>
        </div>
    </div>

    <div class="media">
        <div class="custom-file">
            <label class="custom-file-label" for="photo">Seleccione el Logo <b>(Se permiten JPG o PNG.
                    Tamaño máximo de 800kB)</b></label>
            <input type="file" id="photo" class="custom-file-input @error('photo') is-invalid @enderror" name="photo"
                onchange="previewFile(this, 'photo_preview')" accept="image/*">
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
            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
        </div>
</form>
