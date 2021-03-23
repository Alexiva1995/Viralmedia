<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <div class="col-12">
        <div class="form-group">
            <div class="controls">
                <h2 class="font-weight-bold">Terminos y Condiciones de la pagina</h2>
            </div>
        </div>
    </div>

    <!-- Create the editor container -->
    <div class="mb-4" id="termino">

    </div>

<hr>

    <div class="col-12">
        <div class="form-group">
            <div class="controls">
                <h2 class="font-weight-bold">Politica y Privacidad de la pagina</h2>
            </div>
        </div>
    </div>

    <!-- Create the editor container -->
    <div class="mb-4" id="politica">

    </div>

    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
    </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill('#termino', {
            theme: 'snow'
        });

        var quill = new Quill('#politica', {
            theme: 'snow'
        });
    </script>
</form>
