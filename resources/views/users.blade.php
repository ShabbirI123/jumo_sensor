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
            @if(Auth::user()->role=='admin')
                <div id="app">
                    <app-component></app-component>

                    <div id="userAlert">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{$message}}</p>
                            </div>
                        @endif
                    </div>
                    <div id="createForm">
                        <form action="/users" method="POST">
                            {{ csrf_field() }}
                            <div class="form_only">
                                Username: <input type="text" name="name" placeholder="username" id="name" required><br>
                                Password: <input type="password" name="password" placeholder="password" id="password" required><br>
                                E-Mail: <input type="email" name="email" placeholder="e-mail" id="email" required><br>
                                Role: <select name="role" placeholder="role" id="role" required>
                                    <option value="admin" name="admin" id="admin">Admin</option>
                                    <option value="superuser" name="superuser" id="superuser">Superuser</option>
                                    <option value="user" name="user" id="user">User</option>
                                </select><br>
                                <button type="submit" class="btn btn-primary">Create User</button>
                            </div>
                        </form>
                    </div>

                    <footer-component></footer-component>
                </div>
            @else
                <script>
                    window.alert("Can only access with admin rights!");
                </script>
                <script>window.location = "/home";</script>
            @endif
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
    #createForm{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        width: inherit;
        margin-left: 50px;
        height: 100%;
        padding-bottom: 30px;
    }

    .form_only {
        width: 300px;
        border: black solid 1px;
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
</style>
