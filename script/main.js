const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './server.php',
            items: [],
            activeIndex: -0,
        }
    },

    methods: {
        getApi() {
            axios.get(this.apiUrl)
                .then((response) => {
                    // handle success
                    this.items = response.data;
                    console.log(this.items)
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
        },

        getDisc(index) {
            this.activeIndex = index;
            console.log(this.items[this.activeIndex])
        },

        removeDisplayNone() {
            let cardDisactivated = document.querySelector('div.container-card-disactivated');
            cardDisactivated.classList.add('d-flex');
            cardDisactivated.classList.remove('d-none');
        },

        addDisplayNone() {
            let cardDisactivated = document.querySelector('div.container-card-disactivated');
            cardDisactivated.classList.remove('d-flex');
            cardDisactivated.classList.add('d-none');
        }
    },

    created() {
        this.getApi();
    }
}).mount('#app');