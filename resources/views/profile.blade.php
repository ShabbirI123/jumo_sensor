<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body class="antialiased">

<div class="mybody">
    @if(isset(Auth::user()->name))
        <div id="app">
            <app-component></app-component>
            <div id="userData">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">User Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->email}}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="passwordChangeForm">
                <form action="/profile" method="POST">
                    {{ csrf_field() }}
                    <div class="form_only">
                        New password: <input type="text" name="npassword" placeholder="new password" id="npassword"
                                             required><br>
                        Reconfirm new password: <input type="text" name="rnpassword" placeholder="new password"
                                                       id="rnpassword" required><br>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>

            <footer-component></footer-component>
        </div>
    @else
        <script>window.location = "/login";</script>
    @endif
</div>

<script async defer src="{{asset("js/app.js")}}"></script>

</body>
</html>
<script>

</script>
<style>
    .passwordChangeForm {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        width: inherit;
        margin-left: 230px;
        padding-left: 20px;
        height: 100%;
        padding-bottom: 30px;
    }

    .form_only {
        width: 300px;
        border: black solid 1px;
        padding: 20px;
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

    #createForm div {
        border-radius: 5px;
        padding: 20px;
        margin-left: 210px;
    }

    #userAlert {
        margin-right: 300px;
        margin-left: 300px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
    }

    #userAlert .alert-success {
        margin-top: 25px;
    }

    #userData {

        width: inherit;
        margin-left: 230px;
        padding-left: 20px;
        height: 100%;
        padding-bottom: 30px;
    }
</style>
