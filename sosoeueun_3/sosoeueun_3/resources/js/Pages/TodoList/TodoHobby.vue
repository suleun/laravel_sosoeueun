<template>

    <h1>취미</h1>

    <div v-for="hobby in hobbies" :key="hobby.id">
        <input
            type="radio"
            :value="hobby.id"
            v-model="checked"
            class="appearance-none checked:bg-blue-600 checked:border-transparent mx-2">
            <label >{{ hobby.content }}</label>
        </div>

        <br>

            <div class="mt-2">
                <button
                    @click="plus"
                    class="p-2 pl-5 mx-2 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">취미 추가</button>
                <button
                    @click="Certified"
                    class="p-2 pl-5 pr-5 bg-transparent border-2 border-green-500 text-green-500 text-lg rounded-lg hover:bg-green-500 hover:text-gray-100 focus:border-4 focus:border-green-300">
                    수행
                </button>

            </div>
        </template>

        <script>
            import {defineComponent} from 'vue'
            import Swal from 'sweetalert2'

            export default defineComponent({
                components: {},

                data() {

                    let date = new Date();

                    return {today: date, content: '', hobbies: [], checked: null}
                },

                methods: {
                    Certified() {
                        Swal
                            .fire({
                                title: `${this
                                    .hobbies
                                    .find(v => v.id == this.checked)
                                    .content}`,
                                text: "기록하러 가보죠!",
                                icon: 'success',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'YES'
                            })
                            .then((result) => {
                                if (result.isConfirmed) {

                                    this
                                        .$inertia
                                        .visit('/todolist');
                                }
                            })
                    },

                    plus() {
                        Swal
                            .fire({
                                title: '취미를 추가하세요',
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
                                    .post('/tohobbylist/store', {
                                        today: this.today,
                                        content: res.value
                                    })
                                    .then((res) => {
                                        console.log(res.data)
                                        this.getHobby();
                                    })
                                    .catch((err) => {
                                        console.error(err)
                                    })
                                })
                    },

                    getHobby() {
                        axios
                            .get('/tohobbylist/show')
                            .then((res) => {
                                console.log(res.data)
                                this.hobbies = res.data
                            })
                            .catch((err) => {
                                console.error(err)
                            })
                        }
                },

                created() {
                    this.getHobby()
                }
            })
        </script>