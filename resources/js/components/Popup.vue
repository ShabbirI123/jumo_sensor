<template>
    <div class="download_form">
        <p>Select data to download</p>
        <form id="data_form" method="POST">
            <input type="checkbox" name="Temperature" id="Temperature">Temperature<br>
            <input type="checkbox" name="Co2" id="Co2">Co2<br>
            <input type="checkbox" name="Humidity" id="Humidity">Humidity<br>
            From: <input type="text" name="StartDate" placeholder="Ex.: 2021-07-01 11:08:10" class="Datepicker"><br>
            To: <input type="text" name="EndDate" placeholder="Ex.: 2021-07-01 11:08:11" class="Datepicker"><br>
            <input type="submit" value="Download" name="submit" class="btn btn-primary">
        </form>
    </div>
</template>

<script>
export default {
    name: "Popup.vue",
    data () {
        return {
            picker: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
        }
    },
    mounted() {
        console.log('Popup-Component mounted.')
    },
    props: ['post-route']
}
</script>

<style>
    .Datepicker {
        border: black dotted 1px;
    }


</style>
