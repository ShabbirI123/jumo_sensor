<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
    <popup></popup>
</div>

@foreach($sensordatas as $sensordata)
    <tr>
        <td>{{ $sensordata->ID }}</td>
        <td>{{ $sensordata->Temp1 }}</td>
        <td>{{ $sensordata->CO2 }}</td>
        <td>{{ $sensordata->rH1 }}</td>
        <td>{{ $sensordata->createdAt }}</td><br>
    </tr>
@endforeach

<div id="footer">
    <footer-component></footer-component>
</div>

<script src="{{asset("js/app.js")}}"></script>
</body>
</html>
