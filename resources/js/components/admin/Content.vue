<template>
    <div id="content">
        <div id="home">
            <Home/>
        </div>
        <div id="dashboard">
            <Dashboard/>
        </div>
        <div id="users">
            <Users/>
        </div>
        <div id="download">
            <Download/>
        </div>
        <div id="setting">
            <Settings/>
        </div>
    </div>
</template>

<script>
import Download from "../Download";
import SideNavBar from "./SideNavBar";
import Dashboard from "../Dashboard";
import Home from "../Home";
import Users from "./Users";
import Settings from "../Settings";

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
        let home = document.getElementById("home");
        let dashboard = document.getElementById("dashboard");
        let users = document.getElementById("users");
        let download = document.getElementById("download");
        let settings = document.getElementById("setting");


        if (window.location.href === 'http://127.0.0.1:8000/home') {
        // if (window.location.href === 'http://195.201.96.148:8001/home') {
            download.style.display = "none";
            dashboard.style.display = "none";
            users.style.display = "none";
            settings.style.display = "none";
        } else if (window.location.href === 'http://127.0.0.1:8000/download') {
            // } else if (window.location.href === 'http://195.201.96.148:8001/download') {
            home.style.display = "none";
            dashboard.style.display = "none";
            users.style.display = "none";
            settings.style.display = "none";
        } else if (window.location.href === 'http://127.0.0.1:8000/dashboard') {
            // } else if (window.location.href === 'http://195.201.96.148:8001/dashboard') {
            home.style.display = "none";
            download.style.display = "none";
            users.style.display = "none";
            settings.style.display = "none";
        } else if (window.location.href === 'http://127.0.0.1:8000/users') {
            // } else if (window.location.href === 'http://195.201.96.148:8001/users') {
            home.style.display = "none";
            dashboard.style.display = "none";
            download.style.display = "none";
            settings.style.display = "none";
        } else if (window.location.href === 'http://127.0.0.1:8000/settings') {
            // } else if (window.location.href === 'http://195.201.96.148:8001/settings') {
            home.style.display = "none";
            dashboard.style.display = "none";
            users.style.display = "none";
            download.style.display = "none";
        }
    },
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
    margin-left: 75px;
    height: 100%;
}

#content.active {
    margin-left: 230px;
    transition: margin-left 0.5s;
}
</style>
