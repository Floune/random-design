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

<div class="container">
    <form method="POST" enctype="multipart/form-data" action="{{route('haiku.post')}}">
        @csrf
        <div class="create-content">
            <div class="rotating" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
                <label for="text_1">Première partie</label>
                <input type="text" name="text_1">
            </div>

            <div class="rotatingI" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
                <label for="text_2">Seconde partie</label>
                <input type="text" name="text_2">
            </div>

            <div  class="rotating" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
                <label for="text_3">Troisième partie</label>
                <input type="text" name="text_3">
            </div>

            <div class="rotatingI" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
                <input type="submit">
            </div>

        </div>
    </form>
</div>
</body>
</html>
