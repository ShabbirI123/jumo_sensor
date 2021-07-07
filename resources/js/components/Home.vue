<template>
    <div class="home">
        <h1>Willkommen </h1>
    </div>
</template>

<script>
export default {
    name: "Home.vue",
    props: ['user'],
    data(){
        return {

        }
    },
    mounted() {
        console.log(this.user)
    }
}
</script>

<style scoped>

</style>
