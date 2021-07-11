<template>
    <footer class="footer">
        <div class="container-fluid">
            <span class="text-muted">
                JUMO Mess- und Regelgeräte GmbH
                Pfarrgasse 48
                1230 Wien, Austria

                Telefon: +43 1 61061-0
                Telefax: +43 1 61061-40
                E-Mail: info.at@jumo.net
            </span>
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

<style scoped>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    border: 1px dotted black;
    z-index: 100;
    background: #fff;
    margin-top: 10px;
}
</style>
