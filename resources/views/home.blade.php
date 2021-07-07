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
            <h1> hhhhhhhhhhhhhhhhhhhhhhhhhhhhh{{ auth()->user()->role }}</h1>
            <app-component v-bind:userId="{{ Auth::user()->id }}"></app-component>
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
