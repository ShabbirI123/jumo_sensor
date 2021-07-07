<template>
    <div class="main">
        <SideNavBar/>
        <Content/>
    </div>
</template>

<script>
import Content from "./Content";
import SideNavBar from "./SideNavBar";
import Download from "./Download";

export default {
    components: {
        'Download':Download,
        Content,
        SideNavBar,
    },
    mounted() {
        console.log('Body Component mounted.')
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let content = document.querySelector("#content");


        btn.onclick = function () {
            sidebar.classList.toggle("active");
            content.classList.toggle("active");

            if (btn.classList.contains("bx-menu")) {
                btn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                btn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        }
    }

}
</script>

<style scoped>
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
</style>
