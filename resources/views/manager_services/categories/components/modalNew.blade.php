<!-- Modal -->
<div class="modal fade" id="modalNewCategories" tabindex="-1" role="dialog" aria-labelledby="modalNewCategoriesTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNewCategoriesTitle">Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="form form-vertical" action="{{route('category.store')}}">
                    <div class="form-body">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <fieldset class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </fieldset>
                            </div>
                            <div class="col-12 col-md-6">
                                <fieldset class="form-group">
                                    <label for="">Default Sorting Number</label>
                                    <input type="number" name="sorting_number" class="form-control" required>
                                </fieldset>
                            </div>
                            <div class="col-12 col-md-6">
                                <fieldset class="form-group">
                                    <label for="">Estado</label>
                                    <select name="status" class="form-control custom-select">
                                        <option value="" disabled selected>Selecione una opcion</option>
                                        <option value="0">Desactivo</option>
                                        <option value="1">Activo</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12">
                                <fieldset class="form-group">
                                    <label for="">Descripcion</label>
                                    <textarea name="description" class="form-control" id="summernoteNew"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-12">
                                <fieldset class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
