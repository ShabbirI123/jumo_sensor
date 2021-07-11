<template>
    <div class="dashboard">
        <nav class="topnav" id="myTopnav">
            <a id="coBtn">Co2</a>
            <a id="tempBtn">Temperature</a>
            <a id="vocBtn" d>VOC</a>
            <a id="humBtn">Humidity</a>
            <a id="preBtn">Pressure</a>
            <a id="outBtn">Outdoor Temperature</a>
            <a id="refreshBtn">Refresh</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars">Menu</i>
            </a>
        </nav>
        <div id="iframes">
            <!-- CO2 -->
            <iframe class="keepclearofsidebar" id="co" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=2" width="650"
                    height="400" frameborder="0"></iframe>
            <!-- Temp -->
            <iframe class="keepclearofsidebar" id="temp" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=4" width="650"
                    height="400" frameborder="0"></iframe>
            <!-- VOC -->
            <iframe class="keepclearofsidebar" id="voc" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=6" width="650"
                    height="400" frameborder="0"></iframe>
            <!-- Humidity -->
            <iframe class="keepclearofsidebar" id="hum" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=8" width="650"
                    height="400" frameborder="0"></iframe>
            <!-- Pressure -->
            <iframe class="keepclearofsidebar" id="pre" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=10" width="650"
                    height="400" frameborder="0"></iframe>
            <!-- Outdoor Temp -->
            <iframe class="keepclearofsidebar" id="out" style="display: none"
                    src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=12" width="650"
                    height="400" frameborder="0"></iframe>
        </div>
    </div>
</template>

<script>
export default {
    name: "Dashboard.vue",
    mounted() {
        let coBtn = document.querySelector("#coBtn");
        let tempBtn = document.querySelector("#tempBtn");
        let vocBtn = document.querySelector("#vocBtn");
        let humBtn = document.querySelector("#humBtn");
        let preBtn = document.querySelector("#preBtn");
        let outBtn = document.querySelector("#outBtn");
        let refreshBtn = document.querySelector("#refreshBtn");


        refreshBtn.onclick = function () {
            window.location.reload();
        }

        coBtn.onclick = function () {
            let x = document.getElementById("co");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        tempBtn.onclick = function () {
            let x = document.getElementById("temp");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        humBtn.onclick = function () {
            let x = document.getElementById("hum");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        vocBtn.onclick = function () {
            let x = document.getElementById("voc");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        preBtn.onclick = function () {
            let x = document.getElementById("pre");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        outBtn.onclick = function () {
            let x = document.getElementById("out");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        // Trying to be responsive
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.style.visibility="visible";
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    }
}
</script>

<style scoped>
.dashboard iframe {
    margin-bottom: 10px;
    margin-top: 20px;
}

.keepclearofsidebar {
    float: left;
    margin-left: 25px;
}

.topnav {
    background-color: #203367;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
    background-color: #04AA6D;
    color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}

@media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {
        display: none;
    }

    .topnav a.icon {
        float: right;
        display: block;
    }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
    .topnav.responsive {
        position: relative;
    }

    .topnav.responsive a.icon {
        position: absolute;
        right: 0;
        top: 0;
    }

    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
}
</style>
