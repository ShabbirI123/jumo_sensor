<template>
    <div class="home">
        <h1>Welcome </h1>
        <p class="content-wrapper">JUMO GmbH & Co. KG is a leading global supplier of components and systems for individual sensor and automation solutions.
            In addition to components for the measuring ranges temperature, liquid analysis, pressure, level, flow, and humidity
            the focus is also on automation challenges such as recording and monitoring as well as control and automation. </p>

        <div class="container">
            <div style="text-align:center">
                <h2>Contact Us</h2>
                <p>Swing by for a cup of coffee, or leave us a message:</p>
            </div>
            <div class="row">
                <div class="column">
                    <img src="/resources/images/map.jpg" style="width:100%">
                </div>
                <div class="column">
                    <form action="/action_page.php">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Austria</option>
                            <option value="canada">Germany</option>
                            <option value="usa">Hungary</option>
                        </select>
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="contact_data">
            <p>
                KONTAKT

                JUMO Mess- und Regelgeräte GmbH
                Pfarrgasse 48
                1230 Wien, Austria

                Telefon: +43 1 61061-0
                Telefax: +43 1 61061-40
                E-Mail: info.at@jumo.net
            </p>
        </div>
    </div>
</template>


<script>
export default {
    name: "Home.vue",
    props: ['user'],
    data(){
        return {

        }
    },
    mounted() {
        console.log(this.user)
    }
}
</script>

<style scoped>
    .content-wrapper {
        width: inherit;
        max-width: 50%;
        margin-left: 15px;
    }

    * {
        box-sizing: border-box;
    }

    .contact_data {
        padding-bottom: 10px;
        padding-left: 15px;
        background-color: #f2f2f2;
        text-align: center;
    }

    /* Style inputs */
    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Style the container/contact section */
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
</style>
