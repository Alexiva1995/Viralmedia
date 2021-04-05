var vm_addsaldo = new Vue({
    el: '#addsaldo',
    data: function(){
        return {
            Metodo: 'Stripe',
            Fee: 10,
            Saldo: 0,
            CheckTerminos: false,
            StripeKey: '',
            Payu:{
                response: '',
                reference: '',
                confimation: '',
                signature: ''
            }
        }
    },

    computed:{
        totalPagar: function(){
            let porcenres = (this.Fee / 100)
            let porcen = (this.Saldo * porcenres)
            let total = (this.Saldo + porcen)
            return total
        }
    },
    
    methods: {
        /**
         * Permite cambiar el metodo de pago
         * @param {string} metodo 
         */
        selectMethods: function(metodo){
            this.Metodo = metodo
            if (metodo == 'Coinbase') {
                this.Fee = 2
            }else{
                this.Fee = 10
            }
        },

        pagar: function(){
            if (this.CheckTerminos) {
                if (this.Metodo == 'Stripe') {
                    $('.stripe form').append(this.addScriptStripe())
                    setTimeout(() => {
                        $('.stripe-button-el').click()
                    }, 1000);
                }
                if (this.Metodo == 'Payulatam') {
                    let url = route('addsaldo.payu.generate')
                    let param = {
                        'saldo': this.Saldo,
                        '_token': window.csrf_token
                    }
                    axios.post(url, param).then((response) => {
                        this.Payu.reference = response.data.idorden
                        this.Payu.response = route('addsaldo.payu.response', btoa(response.data.idorden))
                        this.Payu.confimation = route('addsaldo.payu.confirmation', btoa(response.data.idorden))
                        this.Payu.signature = response.data.signature
                        setTimeout(() => {
                            $('#payuform').submit()
                        }, 500);
                    }).catch((error) => {
                        console.log(error.response.data);
                        alert('ocurio un error')
                    })
                }
                if (this.Metodo == 'Coinbase') {
                    $('#coinbaseform').submit()
                }
            }else{
                alert('Debes estar de acuerdo con los terminos y condiciones')
            }
        },

        addScriptStripe:function(){
            return '<script'+
            ' src="https://checkout.stripe.com/checkout.js" class="stripe-button"'+
            ' data-key="'+this.StripeKey+'"'+
            ' data-amount="'+(this.Saldo * 100)+'"'+
            ' data-name="Añadir Saldo"'+
            ' data-description="Saldo a compras '+this.Saldo+'"'+
            ' data-image="https://stripe.com/img/documentation/checkout/marketplace.png"'+
            ' data-locale="auto">'+
        ' </script>'
        }
    }
})