var vm_news = new Vue({
    el: '#news',
    created: function(){
        $(document).ready(function(){
            $('#modalNew').modal({backdrop: 'static', keyboard: false, show:true})
        })
        this.getDataService();
    },

    methods: {
        /**
         * Permite cerrar la modal del aviso
         */
        closeModal: function(){
            if (this.checkServicio) {
                $('#modalNew').modal('hide')
                this.showAlert = false
            }else{
                this.showAlert = true
            }
        },

    }
})