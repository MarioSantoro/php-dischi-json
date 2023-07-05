const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './server.php',
            items: [],
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
        }
    },

    created() {
        this.getApi();
    }
}).mount('#app');