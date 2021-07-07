<template>
    <div id="content">
        <Home/>
        <Dashboard/>
        <Users/>
        <Download/>
        <Settings/>
    </div>
</template>

<script>
import Download from "./Download";
import SideNavBar from "./SideNavBar";
import Dashboard from "./Dashboard";
import Home from "./Home";
import Users from "./Users";
import Settings from "./Settings";
export default {
    name: "Content.vue",
    components: {
        Home,
        Dashboard,
        Users,
        Download,
        Settings,
        SideNavBar,
    },
    mounted() {
        console.log('Content Component mounted');
        let home = document.querySelector(".home");
        let dashboard = document.querySelector(".dashboard");
        let users = document.querySelector(".users");
        let download = document.querySelector(".download");
        let settings = document.querySelector(".setting");

        if (window.location.href === 'http://localhost:3000/home') {
            download.style.display = "none";
            dashboard.style.display = "none";
            users.style.display = "none";
            settings.style.display = "none";
        }
        if (window.location.href === 'http://localhost:3000/download') {
            home.style.display = "none";
            dashboard.style.display = "none";
            users.style.display = "none";
            settings.style.display = "none";
        }
        if (window.location.href === 'http://127.0.0.1:3000/dashboard') {
            home.style.display = "none";
            download.style.display = "none";
            users.style.display = "none";
            settings.style.display = "none";
        }
        if (window.location.href === 'http://127.0.0.1:3000/users') {
            home.style.display = "none";
            dashboard.style.display = "none";
            download.style.display = "none";
            settings.style.display = "none";
        }
        if (window.location.href === 'http://127.0.0.1:3000/settings') {
            home.style.display = "none";
            dashboard.style.display = "none";
            users.style.display = "none";
            download.style.display = "none";
        }
    },
    data() {
        return {};
    }
}
</script>

<style scoped>
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#content {
    width: inherit;
    background: red;
    margin-left: 75px;
    height: 100%;
}

#content.active {
    margin-left: 230px;
    transition: margin-left 0.5s;
}
</style>
