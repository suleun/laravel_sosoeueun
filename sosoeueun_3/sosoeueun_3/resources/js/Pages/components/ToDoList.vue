<template>
    <app-layout title="Completion">
        <template #header>
            {{ $page.props.user.name }}
            님이 한 일
        </template>

        <div class="bg-white rounded-xl p-4 shadow-xl mt-4 mx-4">

            <div>

                <link
                    rel="stylesheet"
                    href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
                    <link
                        rel="stylesheet"
                        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

                        <section class="py-1 bg-blueGray-50">
                            <div class="w-full xl:w-2/3 px-4 mx-auto mt-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white ">
                                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                                        <div class="flex flex-wrap items-center">
                                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                                <h3 class="font-semibold text-base text-blueGray-700">
                                                    계획 실천율
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block w-full overflow-x-auto">
                                        <table class="items-center w-full border-collapse text-blueGray-700  ">
                                            <thead class="thead-light ">
                                                <tr>
                                                    <th
                                                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                        월
                                                    </th>
                                                    <th
                                                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                        완료한 일
                                                    </th>
                                                    <th
                                                        class="px-6 bg-blueGray-50 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                        12
                                                    </th>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                                        {{ finish }}/{{ dos }}
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                        <div class="flex items-center">
                                                            <span class="mr-2">{{ finish/dos*100 }}%</span>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                    <br>
                        <div>
                            <section class="py-1 bg-blueGray-50">

                                <!-- component -->
                                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">

                                    <div
                                        class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                        <table class="min-w-full">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">완료 된 일</th>
                                                    <th
                                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">날짜</th>

                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                <tr v-for="todo in todos" :key="todo.id">
                                                    <td
                                                        v-if="todo.finished == 1"
                                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                        {{todo.content}}

                                                    </td>
                                                    <td
                                                        v-if="todo.finished == 1"
                                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                        {{todo.today}}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th
                                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-red-500 tracking-wider">완료 못 한일</th>
                                                    <th
                                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-red-500 tracking-wider">날짜</th>

                                                </tr>

                                                <tr v-for="todo in todos" :key="todo.id">
                                                    <td
                                                        v-if="todo.finished == 0"
                                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                        {{todo.content}}

                                                    </td>
                                                    <td
                                                        v-if="todo.finished == 0"
                                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                        {{todo.today}}
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </section>
                        </div>

                        <br>

                            <div class="bg-blueGray-50">
                                <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 ">
                                    <div
                                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                        <div
                                            v-for="hobby in hobbies"
                                            :key="hobby.id"
                                            class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
                                            <div >
                                                <!-- id 번호에 맞는 이미지와 content 내용 출력 필요 -->
                                                <img
                                                    class="object-center object-cover h-auto w-full"
                                                    :src="'/storage/' + hobby.image"
                                                    alt="photo"></div>
                                                <div class="text-center py-8 sm:py-6">
                                                    <p class="text-xl text-gray-700 font-bold mb-2">{{ hobby.to_hobbies_id}}</p>
                                                    <p class="text-xl text-gray-700 font-bold mb-2">{{ hobby.comment }}</p>
                                                    <p class="text-base text-gray-400 font-normal">{{ hobby.created_at }}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </section>
                                </div>

                            </div>

                        </app-layout>

</template>

<script>
    import {defineComponent} from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
    props: [
        'todos', 'dos', 'finish', 'hobbies', 'to_hobbies'
    ],
    components: {
        AppLayout
    },

    methods() {}
    })
</script>