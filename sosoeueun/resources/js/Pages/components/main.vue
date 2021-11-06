<template>
    <div>
        <div>메인 페이지
            여기에 뭐가 들어가야 되나면.. 상단바..! 로그인, 로그 아웃 버튼 
        </div>
        
        <calendar/>

        <checkList/>


    </div>

</template>

<script>

    import calendar from "./calendar.vue";

    import checkList from "./checkList.vue";

    
    export default {
        components: {
            calendar,
            checkList
        }
    }
</script>

<style>
div{
    padding: 3%;
}
</style>