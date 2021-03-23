<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
  
    <div class="row">

        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <h2 class="font-weight-bold">Ajustes de la Pagina</h2>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label>Nombre de la pagina (Pestaña del Navegador)</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="">
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label>Descripción de la pagina</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="">
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label>Palabras clave del sitio web</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="">
                </div>
            </div>
        </div>


        <div class="col-6">
            <div class="form-group">
                <div class="controls">
                    <label>Modo de Mantenimiento</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="">
                </div>
            </div>
        </div>

        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">GUARDAR</button>
        </div>
    </div>
</form>
