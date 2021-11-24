<template>

<header>
<h1>이번달 매일 할 일</h1>
</header>
    

    <input
        type="checkbox"
        for="toMonth"
        class="appearance-none checked:bg-blue-600 checked:border-transparent">
        <label for="toMonth">이번달 매일 할 일</label>

<br>
        <button @click="plus" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">할일 완료</button>

    </template>

    <script>
        import {defineComponent} from 'vue'
        import Swal from 'sweetalert2'

        export default defineComponent({
            components: {},

            methods: {
                plus() {
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
                }
            }
        })
    </script>