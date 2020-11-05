var vm_servicios = new Vue({
    el: '#servicios',
    created: function(){
        $(document).ready(function(){
            $('#modalAvisoServicio').modal({backdrop: 'static', keyboard: false, show:true})
        })
        this.getDataService();
    },
    data: function(){
        return {
            checkServicio: false,
            showAlert: false,
            Categories: [],
            Total: {
                cantidad: 1,
                precio: 0,
                total: 0
            },
            Option:{
                indexCategory: 0,
                indexService: 0,
                idCategory: 0,
                idService: 0,
            },
        }
    },
    computed:{
        /**
         * Permite obtener la informacion de un servicio en especifico
         */
        Service: function(){
            if (this.Option.idCategory != 0 && this.Option.idService != 0) {
                this.Total.precio = this.Categories[this.Option.indexCategory].services[this.Option.indexService].price
                return this.Categories[this.Option.indexCategory].services[this.Option.indexService]
            }else{
                return []
            }
        },

        /**
         * Permite obtener el total a pagar
         */
        TotalOrden: function (){
            return (this.Total.cantidad * this.Total.precio)
        },

        /**
         * Permite obtener todos los servicios de una categoria especifica
         */
        Services: function(){
            if (this.Option.idCategory != 0) {
                console.log(this.Categories[this.Option.indexCategory].services.length);
                if (this.Categories[this.Option.indexCategory].services.length == 0) {
                    this.Option.idService = 0
                }
                return this.Categories[this.Option.indexCategory].services
            }else{
                return []
            }
        }
    },
    methods: {
        /**
         * Permite cerrar la modal del aviso
         */
        closeModal: function(){
            if (this.checkServicio) {
                $('#modalAvisoServicio').modal('hide')
                this.showAlert = false
            }else{
                this.showAlert = true
            }
        },

        /**
         * Permite obtener la informacion de los servicios
         */
        getDataService:function(){
            let url = route('servicios.get_data')
            axios.get(url).then((response) => {
                this.Categories = response.data
            })
        }
    }
})