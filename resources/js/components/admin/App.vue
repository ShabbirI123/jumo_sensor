<template>
    <div class="mainbody">
        <body-component></body-component>
    </div>
</template>

<script>
import Body from "./Body";
export default {
    name: "App.vue",
    components: {
        Body,
    },
    mounted() {
    }
}
</script>

<style scoped>
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.mainbody{
    margin: 0px;
    padding: 0px;
    width: 100%;
}
</style>


