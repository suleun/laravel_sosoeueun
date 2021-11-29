<template>
    <app-layout title="Dashboard">
        <template #header>
        </template>

        <div class="flex">
            <div class="py-4 w-2/3">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <section class=" bg-secondary-lite md:p-16">
                        <calendar-container/>
                    </section>

                </div>
            </div>
        </div>

        <div class="w-1/3 mx-auto">

        <aside class="bg-white rounded-xl p-4 shadow-xl mt-4 ">

            <todo-list-month-container/>
        </aside>

        <aside class="bg-white rounded-xl p-4 shadow-xl mt-4 ">

            <todo-list-container/>

        </aside>

        
        <aside class="bg-white rounded-xl p-4 shadow-xl mt-4 ">

            <todo-hobby/>

        </aside>

        </div>

</div>
     
    </app-layout>

</template>

<script>
    import {defineComponent} from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import CalendarContainer from '@/Pages/Calendar/CalendarContainer.vue'
    import TodoListContainer from '@/Pages/TodoList/TodoListContainer.vue'
    import TodoListMonthContainer from '@/Pages/TodoList/TodoListMonthContainer.vue'
    import TodoHobby from '@/Pages/TodoList/TodoHobby.vue'
    

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            CalendarContainer,
            TodoListContainer,
            TodoListMonthContainer,
            TodoHobby
        }
    })
</script>