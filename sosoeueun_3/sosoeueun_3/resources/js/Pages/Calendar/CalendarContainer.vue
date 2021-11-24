<template>

    <FullCalendar :options="calendarOptions"/>

</template>

<script>

    import '@fullcalendar/core/vdom' // solves problem with Vite
    import FullCalendar from '@fullcalendar/vue3'
    import dayGridPlugin from '@fullcalendar/daygrid'
    import interactionPlugin from '@fullcalendar/interaction'

    import {defineComponent} from 'vue'
    export default defineComponent({

        components: {
            FullCalendar // make the <FullCalendar> tag available
        },
        data() {
            return {
                calendarOptions: {
                    plugins: [
                        dayGridPlugin, interactionPlugin
                    ],
                    initialView: 'dayGridMonth',
         
                headerToolbar: {
                        left: 'today',
                        center: 'title',
                        right: 'prev,next'
                    },

                    editable: true,
        selectable: true,
        dayMaxEvents: true,

                }
            }
        }

    })
</script>