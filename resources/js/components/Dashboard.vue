<template>
    <div class="dashboard">
        <div>
            <!-- CO2 -->
            <iframe class="keepclearofsidebar" src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=2" width="700" height="400" frameborder="0"></iframe>
            <!-- Temp -->
            <iframe class="keepclearofsidebar" src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=4" width="700" height="400" frameborder="0"></iframe>
            <!-- VOC -->
            <iframe class="keepclearofsidebar" src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=6" width="700" height="400" frameborder="0"></iframe>
            <!-- Humidity -->
            <iframe class="keepclearofsidebar" src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=8" width="700" height="400" frameborder="0"></iframe>
            <!-- Pressure -->
            <iframe class="keepclearofsidebar" src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=10" width="700" height="400" frameborder="0"></iframe>
            <!-- Outdoor Temp -->
            <iframe class="keepclearofsidebar" src="http://195.201.96.148:3000/d-solo/LNhMA-k7z/jumo_values?orgId=1&panelId=12" width="700" height="400" frameborder="0"></iframe>
        </div>
    </div>
</template>

<script>
export default {
    name: "Dashboard.vue"
}
</script>

<style scoped>
.dashboard iframe{
    margin-bottom: 20px;
    margin-top: 20px;
}
</style>
