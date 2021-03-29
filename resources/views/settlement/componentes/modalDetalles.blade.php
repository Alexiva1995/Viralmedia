<!-- Modal -->
<div class="modal fade" id="modalModalDetalles" tabindex="-1" role="dialog" aria-labelledby="modalModalDetallesTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalModalDetallesTitle">Detalles de comisiones del usuario (@{{ComisionesDetalles.fullname}})</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify">
                <table class="table nowrap scroll-horizontal-vertical table-striped" style="width: 100%">
                    <thead>
                        <tr class="text-center">
                            <th> 
                            </th>
                            <th>ID Comision</th>
                            <th>Fecha</th>
                            <th>Concepto</th>
                            <th>ID Referido</th>
                            <th>Referido</th>
                            <th>Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in ComisionesDetalles.comisiones" class="text-center">
                            <td>
                                <input type="checkbox" :value="item.id" name="listComisiones[]">
                            </td>
                            <td v-text="item.id"></td>
                            <td v-text="item.fecha"></td>
                            <td v-text="item.descripcion"></td>
                            <td v-text="item.referred_id"></td>
                            <td v-text="item.referido.fullname"></td>
                            <td v-text="item.debito +' $'"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4" class="text-right">Total Comision</th>
                            <th colspan="2" v-text="ComisionesDetalles.total+' $'" class="text-right"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>