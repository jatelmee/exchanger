new Vue({
    el: '#app',
    data: {
        outputValue: '0',
        term: '0',
        depositAmount: '1000',
        amountAfter: '0',
        rate: '0',
        profit: '0',
    },
    methods: {
        calculate (){
            this.outputValue = this.depositSum;

        }
    }
})