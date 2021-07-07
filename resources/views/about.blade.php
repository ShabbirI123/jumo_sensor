<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JUMO</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
<div id="header">
    <header-component></header-component>
</div>

<div id="app">
    <about-component></about-component>

    @if(isset(Auth::user()->name))
        <div class="alert alert-danger success-block keepclearofsidebar">
            <strong>You are logged in!</strong>
            <br />
            <a href="{{ url('/logout') }}">Logout</a>
        </div>
        <app-component></app-component>
    @else
        <script>window.location = "/login";</script>
    @endif

</div>

<div id="footer">
{{--    <footer-component></footer-component>--}}
</div>

<script src="{{asset("js/app.js")}}"></script>
<style>
    .keepclearofsidebar {
        margin-left: 160px;
    }
</style>
</body>
</html>
