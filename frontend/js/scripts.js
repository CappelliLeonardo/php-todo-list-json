// Estraggo la funzione createApp dall'oggetto Vue
const { createApp } = Vue;

// Creo l'istanza di Vue da mondare in pagina
createApp({
    data() {
        return {
            ToDo: [],
        };
    },
    mounted() {
        axios
            .get('http://localhost:8888/classe114/php-todo-list-json/backend/index.php')
                
            .then((res) => {
                this.ToDo = res.data;
            });
    }
  // Monto l'istanza di Vue in pagina
}).mount('#app');