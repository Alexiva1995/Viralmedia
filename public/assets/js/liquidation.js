var vm_liquidation = new Vue({
    el: '#settlement',
    data: function(){
        return{
            ComisionesDetalles: []
        }
    },
    methods: {
        /**
         * Permite obtener la informacion de las comisiones de un usuario
         * @param {integer} iduser 
         */
        getDetailComision: function(iduser){
            let url = route('liquidation.show', iduser)
            axios.get(url).then((response) => {
                this.ComisionesDetalles = response.data
                $('#modalModalDetalles').modal('show')
            }).catch(function (error) {
                console.log(error)
            })
        }
    }
})