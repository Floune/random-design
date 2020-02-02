<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style-create.css') }}">

    <title>Ghetto</title>
</head>

@php
    $randColor = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)
@endphp

<body style="background-color: {{$randColor}}">
    <div>
        <h2 class="marron">MARRON</h2>
    </div>
</body>
</html>

