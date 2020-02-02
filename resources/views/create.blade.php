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
    <form method="POST" enctype="multipart/form-data" action="{{route('post')}}">
        @csrf
        <div class="create-content">
            <div class="rotating" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
            <label for="auteur">Pseudonyme</label>
            <input type="text" name="auteur">
            </div>

            <div class="rotatingI" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
            <label for="titre">Titre</label>
            <input type="text" name="titre">
            </div>

            <div  class="rotating" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
            <label for="corps">Texte</label>
            <input type="text" name="corps">
            </div>

            <div  class="rotatingI" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
            <label for="image">Image</label>
            <input type="file" name="image">
            </div>

            <div class="rotating" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">

                <button class="submit">Merde</button>
            </div>

        </div>

    </form>

    <div class="rotatingI" style="width: 200px; margin: {{random_int(0, 10)}}px {{random_int(0, 80)}}%">
        <span class="retour"><a href="{{route('home')}}"><button>retour</button></a></span>
    </div>
</div>
</body>
</html>
