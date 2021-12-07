<template>

    <header>
        <h1>이번달 매일 할 일</h1>
    </header>

    <div v-for="todom in todoms" :key="todom.id">

        <div v-if="today == todom.today">
            <input
                :value="todom.id"
                v-model="checked"
                type="radio"
                class="appearance-none checked:bg-blue-600 checked:border-transparent mx-2">
                <label>{{ todom.content }}</label>
            </div>

        </div>

        <br>

            <div class="mt-2">
                <button
                    @click="plus"
                    class="p-2 pl-5 mx-2 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">할일 추가</button>
            </div>

        </template>

        <script>
            import {defineComponent} from 'vue'
            import Swal from 'sweetalert2'
            import axios from 'axios';

            export default defineComponent({
                components: {},

                data() {

                    let todayMake = new Date();
                    let year = todayMake.getFullYear(); // 년도
                    let month = todayMake.getMonth() + 1; // 월

                    let todayMonth = `${year}-${month}`;

                    return {today: todayMonth, content: '', todoms: [], checked: null}
                },

                methods: {

                    plus() {

                        Swal
                            .fire({
                                title: '이번달 매일 할일을 추가하세요',
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
                                    .post('/todomlist/store', {
                                        today: this.today,
                                        content: res.value
                                    })
                                    .then((res) => {
                                        console.log(res.data)
                                        this.getTodoM();
                                    })
                                    .catch((err) => {
                                        console.error(err)
                                    })
                                })
                    },

                    getTodoM() {
                        axios
                            .get('/todomlist/show')
                            .then((res) => {
                                console.log(res.data)
                                this.todoms = res.data
                            })
                            .catch((err) => {
                                console.error(err)
                            })
                        }
                },

                created() {
                    this.getTodoM()
                }

            })
        </script>