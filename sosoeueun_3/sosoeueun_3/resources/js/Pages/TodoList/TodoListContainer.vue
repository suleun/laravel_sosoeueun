<template>
    <h1>오늘 할 일</h1>

        <div v-for="todo in todos.filter(v => v.finished == 0)" :key="todo.id"  class="my-2">
            <div v-if="today ==  todo.today">
                <input
                    type="radio"
                    for="toDay"
                    :value="todo.id"
                    v-model="checked"
                    class="appearance-none checked:bg-blue-600 checked:border-transparent"
                />
                <label for="toDay">{{ todo.content }}</label>
            </div>
        </div>

        <hr>

        <h1 class="my-2">완료한 일</h1>

        <div v-for="todo in todos.filter(v => v.finished == 1)" :key="todo.id">
            <div v-if="today ==  todo.today">
                <label for="toDay">{{ todo.content }}</label>
            </div>
        </div>

        <br>

            <div class="mt-2">
                <button
                    @click="plus"
                    class="p-2 pl-5 mx-2 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">할일 추가</button>
                <button
                    @click="Certified"
                    class="p-2 pl-5 pr-5 bg-transparent border-2 border-green-500 text-green-500 text-lg rounded-lg hover:bg-green-500 hover:text-gray-100 focus:border-4 focus:border-green-300">할일 완료</button>
                <button
                    @click="deleteT"
                    class="p-2 pl-5 pr-5 bg-transparent border-2 border-red-500 text-red-500 text-lg rounded-lg hover:bg-red-500 hover:text-gray-100 focus:border-4 focus:border-red-300 mx-2">
                    삭제
                </button>

            </div>
        </template>

        <script>
            import {defineComponent} from 'vue'
            import Swal from 'sweetalert2'

            export default defineComponent({
                components: {},
                data() {
                    let todayMake = new Date();
                    let year = todayMake.getFullYear(); // 년도
                    let month = todayMake.getMonth() + 1; // 월
                    let date = todayMake.getDate(); // 날짜

                    let todayDate = `${year}-${month}-${date}`;

                    return {today: todayDate, content: '', todos: [], checked: null}
                },

                methods: {
                    Certified() {
                        Swal
                            .fire({
                                title: `${ this.todos.find(v => v.id == this.checked).content}`,
                                text: "완벽하게 일을 수행 하셨나요?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'YES'
                            })
                            .then((result) => {
                                if (result.isConfirmed) {
                                    axios.post(`/todolist/update/${this.checked}`)
                                        .then((res) => {
                                            console.log(res)
                                            Swal.fire('성공!', '고생하셨어요', 'success')
                                            this.getTodo()
                                        })
                                }
                            })
                    },

                    plus() {

                        Swal
                            .fire({
                                title: '할일을 추가하세요',
                                input: 'text',
                                inputAttributes: {
                                    autocapitalize: 'off'
                                },
                                showCancelButton: true,
                                confirmButtonText: 'plus',
                                showLoaderOnConfirm: true
                            })
                            .then((res) => {
                                axios
                                    .post('/todolist/store', {
                                        today: this.today,
                                        content: res.value
                                    })
                                    .then((res) => {
                                        console.log(res.data)
                                        this.getTodo();
                                    })
                                    .catch((err) => {
                                        console.error(err)
                                    })
                                })
                    },

                    getTodo() {
                        axios
                            .get('/todolist/show')
                            .then((res) => {
                                console.log(res.data)
                                this.todos = res.data
                            })
                            .catch((err) => {
                                console.error(err)
                            })
                        },

                    deleteT() {
                        axios
                            .delete(`/todolist/destroy/${this.checked}`)
                            .then(response => {
                                console.log(response);
                                this.getTodo()
                            })
                            .catch(function (error) {
                                console.log(error.response)
                            })
                        }
                },

                created() {
                    this.getTodo()

                }

            })
        </script>