<template>
    <div class="download">
        <h1>Download</h1>
        <div id="download_form">
            <p>Select data to download</p>
            <form id="data_form" action="export" method="GET">
                <div class="form_only">
                    <input type="checkbox" name="Temperature" id="Temperature">Temperature<br>
                    <input type="checkbox" name="Co2" id="Co2">Co2<br>
                    <input type="checkbox" name="Humidity" id="Humidity">Humidity<br>
                    From: <br><input type="text" name="StartDate" placeholder="Ex.: 2021-07-01 11:08:10" class="Datepicker"><br>
                    To: <br><input type="text" name="EndDate" placeholder="Ex.: 2021-07-01 11:08:11" class="Datepicker"><br>
                    <input type="submit" value="Download" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "Download.vue"
}
</script>

<style scoped>
.download.hide{
    visibility:hidden
}
 .Datepicker {
     border: black dotted 1px;
 }

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#download_form{
    width: inherit;
    margin-left: 10px;
    height: 100%;
}

input[type=text], select {
    width: 250px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 250px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.form_only {
    width: 300px;
    border: black solid 1px;
}
</style>
