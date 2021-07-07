<template>

    <footer class="footer">
        <div class="container-fluid">
            <p class="text">JUMO Mess- und Regelgeräte GmbH</p>
        </div>
    </footer>

</template>

<script>
export default {
    name: "Footer.vue",
    mounted() {
        console.log('Footer Component mounted.')
    }
}
</script>

<style>

.footer {
    width: 100%;
    display: inline-block;
    margin: 2em 0;
    height: 70px;
    background-color: #999;
    font-family: Raleway, sans-serif;
    position: fixed;
    bottom: 0;
}

.text {
    padding-left: 10%;
    color: white;
    font-size: 1em;
    line-height: 70px;
}

</style>
