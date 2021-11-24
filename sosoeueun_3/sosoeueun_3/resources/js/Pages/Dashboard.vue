<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                사용자이름
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <section>

                        <calendar-container/>
                    </section>

                </div>
            </div>
        </div>

        <aside>
            <todo-list-container/>
            <todo-list-month-container/>
        </aside>

    </app-layout>

</template>

<script>
    import {defineComponent} from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import CalendarContainer from '@/Pages/Calendar/CalendarContainer.vue'
    import TodoListContainer from '@/Pages/TodoList/TodoListContainer.vue'
    import TodoListMonthContainer from '@/Pages/TodoList/TodoListMonthContainer.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            CalendarContainer,
            TodoListContainer,
            TodoListMonthContainer
        }
    })
</script>