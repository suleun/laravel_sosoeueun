<template>
    <div>
        <div>메인 페이지</div>
        
        <calendar/>

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
