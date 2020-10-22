<div class="modal fade" id="modalAvisoServicio" tabindex="-1" role="dialog" aria-labelledby="modalAvisoServicioTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h5 class="modal-title" id="modalAvisoServicioTitle">Vertically Centered</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> --}}
            <div class="modal-body text-center mt-2">
                <h3>
                    <strong class="text-red-alt">¡Importante!</strong>
                </h3>
                <p>
                    Antes de finalizar la compra de cualquiera de nuestros servicios por favor LEA TODA LA DESCRIPCIÓN
                    del mismo, esta la podrás ver en la parte inferior derecha de la orden, Gracias. (Viralmanagers ya
                    está disponible para su compra)
                </p>
                <div class="col-12 d-flex justify-content-center mb-2">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                        <input type="checkbox" checked="" value="false" v-model="checkServicio">
                        <span class="vs-checkbox">
                            <span class="vs-checkbox--check">
                                <i class="vs-icon feather icon-check"></i>
                            </span>
                        </span>
                        <span class="">Acepta haber leído</span>
                    </div>
                </div>
                <div class="alert alert-primary mb-2" role="alert" v-if="showAlert">
                    Por favor presione el "Acepta haber leido" para continuar
                </div>
                <div class="col-12">
                    <button type="button"
                        class="btn text-white bg-purple-alt2 btn-block padding-button-short" v-on:click="closeModal()">ENTENDIDO</button>
                </div>
            </div>
        </div>
    </div>
</div>
