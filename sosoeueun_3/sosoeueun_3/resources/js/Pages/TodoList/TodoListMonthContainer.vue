<template>

    <header>
        <h1>이번달 매일 할 일</h1>
    </header>

        <div v-for="todom in todoms" :key="todom.id"> 

        <input
            type="checkbox"
            class="appearance-none checked:bg-blue-600 checked:border-transparent mx-2">
            <label>{{ todom.content }}</label>
        </div>

        <br>

            <div class="mt-2">
                <button
                    @click="plus"
                    class="p-2 pl-5 mx-2 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">할일 추가</button>
                <button
                    @click="Certified"
                    class="p-2 pl-5 pr-5 bg-transparent border-2 border-green-500 text-green-500 text-lg rounded-lg hover:bg-green-500 hover:text-gray-100 focus:border-4 focus:border-green-300">할일 완료</button>

            </div>

        </template>

        <script>
            import {defineComponent} from 'vue'
            import Swal from 'sweetalert2'

            export default defineComponent({
                components: {},

                data() {
                    return {today: '2021-11-29', content: '', todoms: []}
                },

                methods: {
                    Certified() {
                        const {value: file} = Swal.fire({
                            title: 'Select image',
                            input: 'file',
                            inputAttributes: {
                                'accept': 'image/*',
                                'aria-label': 'Upload your profile picture'
                            }
                        })

                        if (file) {
                            const reader = new FileReader()
                            reader.onload = (e) => {
                                Swal.fire(
                                    {title: 'Your uploaded picture', imageUrl: e.target.result, imageAlt: 'The uploaded picture'}
                                )
                            }
                            reader.readAsDataURL(file)
                        }
                    },

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