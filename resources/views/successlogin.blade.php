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

    <div class="container box">
        <h3 align="center">Simple Login System in Laravel</h3><br />

        @if(isset(Auth::user()->name))
            <div class="alert alert-danger success-block">
                <strong>You are logged in!</strong>
                <br />
                <a href="{{ url('/logout') }}">Logout</a>
            </div>
        @else
            <script>window.location = "/";</script>
        @endif

        <br />
    </div>

    <div id="footer">
{{--        <footer-component></footer-component>--}}
    </div>

<script async defer src="{{asset("js/app.js")}}"></script>

</body>
</html>
<script>
    //import SideNavBar from
    export default {
        components: {SideNavBar}
    }
</script>
