// Estraggo la funzione createApp dall'oggetto Vue
const { createApp } = Vue;

// Creo l'istanza di Vue da mondare in pagina
createApp({
    data() {
        return {
            ToDo: [],
            newTodo:'',
        };
    },
    mounted() {
        axios
            .get('http://localhost:8888/classe114/php-todo-list-json/backend/index.php')
                
            .then((res) => {
                this.ToDo = res.data;
            });
    },
    methods:{
        addTodo(){
            // this.ToDo.push({
            //     task: this.newTodo,
            //     completed: false
            // });

            // this.newTodo = '';
            axios
                .post(
                    'http://localhost:8888/classe114/php-todo-list-json/backend/addToDo.php',
                    {
                        task: this.newTodo,
                        completed: false
                    },
                    {
                        headers:{
                            'Content-type': 'multipart/form-data'
                        }
                    }
                )
                .then(res=> {
                    console.log(res);
                    let newToDo = {
                        task: this.newTodo,
                        completed: false
                    }
                    this.ToDo.push(newToDo)
                });
        }
    }
  // Monto l'istanza di Vue in pagina
}).mount('#app');