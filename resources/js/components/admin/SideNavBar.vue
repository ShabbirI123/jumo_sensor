<template>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">Jumo Sensor</div>
            </div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="/home">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="/dashboard">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="/users">
                    <i class='bx bxs-user-account' ></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">My Profile</span>
                </a>
                <span class="tooltip">My Profile</span>
            </li>
            <li>
                <a href="/download">
                    <i class='bx bxs-download' id="downloadBtn"></i>
                    <span class="links_name">Download</span>
                </a>
                <span class="tooltip">Download</span>
            </li>
            <li>
                <a href="/settings">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li>
                <a href="/logout">
                    <i class='bx bx-log-out' id="log_out" ></i>
                    <span class="links_name">Sign Out</span>
                </a>
                <span class="tooltip">Sign Out</span>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    mounted() {

        console.log('Sidebar Component mounted.')

    }
}


</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" , sans-serif;
}

::selection{
    color: #fff;
    background: #11101d;
}
.sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 75px;
    background: #11101d;
    padding: 6px 14px;
    z-index: 99;
    transition: all 0.5s ease;
}
.sidebar.active{
    width: 230px;
}
.sidebar .logo_content .logo{
    color: #fff;
    display: flex;
    height: 50px;
    width: 100%;
    align-items: center;
    opacity: 0;
    pointer-events: none;
    transition: all 0.5s ease;
}
.sidebar.active .logo_content .logo{
    opacity: 1;
    pointer-events: none;
}
.logo_content .logo i{
    font-size: 28px;
    margin-right: 5px;
}
.logo_content .logo .logo_name{
    font-size: 20px;
    font-weight: 400;
}
.sidebar #btn{
    position: absolute;
    color: #fff;
    top: 6px;
    left: 50%;
    font-size: 22px;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 50px;
    transform: translateX(-50%);
}
.sidebar.active #btn{
    left: 90%;
}
.sidebar ul{
    margin-top: 20px;
}
.sidebar ul li{
    position: relative;
    height: 50px;
    width: 100%;
    list-style: none;
    line-height: 50px;
    margin: 5px 0;
}
.sidebar ul li .tooltip{
    position: absolute;
    left: 125px;
    top: 0;
    transform: translate(-50% , -50%);
    border-radius: 6px;
    height: 35px;
    width: 120px;
    background: #fff;
    line-height: 35px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transition: 0s;
    opacity: 0;
    pointer-events: none;
    display: block;
}
.sidebar.active ul li .tooltip{
    display: none;
}
.sidebar ul li:hover .tooltip{
    transition: all 0.5s ease;
    opacity: 1;
    top: 50%
}
.sidebar ul li input{
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    border-radius: 12px;
    outline: none;
    border: none;
    background: #1d1b31;
    padding-left: 50px;
    font-size: 18px;
    color: #fff;
}
.sidebar ul li .bx-search{
    position: absolute;
    z-index: 99;
    color: #fff;
    font-size: 22px;
    transition: all 0.5s ease;
}
.sidebar ul li .bx-search:hover{
    background: #fff;
    color: #1d1b31;
}
.sidebar ul li a{
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 12px;
    white-space: nowrap;
    transition: all 0.4s ease;
}
.sidebar ul li a:hover{
    color: #11101d;
    background: #fff;
}
.sidebar ul li i{
    font-size: 18px;
    font-weight: 400;
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    line-height: 50px;
    text-align: center;
}
.sidebar .links_name{
    font-size: 15px;
    font-weight: 400;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}
.sidebar.active .links_name{
    transition: 0s;
    opacity: 1;
    pointer-events: auto
}

.profile #log_out{
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
    min-width: 50px;
    line-height: 50px;
    font-size: 20px;
    border-radius: 12px;
    text-align: center;
    transition: all 0.4s ease;
    background: #1d1b31;
}

</style>
