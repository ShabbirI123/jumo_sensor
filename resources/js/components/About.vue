<template>
    <div id="about">
        <div class="about-section">
            <h1>About Us Page</h1>
            <p>testsetstset</p>
            <p>setgsetseetrsetsetststsetsetgsgesges</p>
        </div>

        <h2 style="text-align:center">Our Team</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Shabbir Islam</h2>
                        <p class="title">Web Developer</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Alexander Kottisch</h2>
                        <p class="title">Web Developer</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Lukas Geier</h2>
                        <p class="title">Web Developer</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Linus Fulton</h2>
                        <p class="title">Web Developer</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('About-Component mounted.')
    }
}
</script>

<style scoped>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

html {
    box-sizing: border-box;
}

*, *:before, *:after {
    box-sizing: inherit;
}

.column {
    float: left;
    width: 50%;
    margin-bottom: 16px;
    padding: 0 8px;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
}

.about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
}

.container {
    padding: 0 16px;
}

.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}

@media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}
</style>
