<template>
    <app-layout title="Completion">
        <template #header>
            사용자 님이 한 일
        </template>
        <div class="bg-white rounded-xl p-4 shadow-xl mt-4 ">
            
            달에 한 일 : 한 횟수 / 달 수 
            <br>

            하루에 한 일 : 게시판 형태로
            <br>
            
            취미 : 사진 시간별로

        </div>

    </app-layout>

</template>

<script>

    import AppLayout from '@/Layouts/AppLayout.vue'

    export default {components: {
            AppLayout
        }}
</script>