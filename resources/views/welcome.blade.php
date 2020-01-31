<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ghetto</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    @php
        $randColor = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)
    @endphp
    <body style="background-color: {{$randColor}};">
        <div style="height: 300px">
            @include('partials.bandeau', ['phrase' => $phrase] )
        </div>
            <div class="content">
                <div class="new-post">
                    <a href="{{route('create')}}"><button>nouveau scandale</button></a>
                </div>
                @foreach($posts ?? '' as $post)
                    @include('partials.post', ['post' => $post])
                    <div style="width: 100%; height: 12px;transform: rotate({{random_int(0, 180)}}deg); background-color: {{'#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}"></div>
                @endforeach
                {{ $posts->links() }}
                <div class="new-post">
                    <a href="{{route('create')}}"><button class="nouveau">nouveau scandale</button></a>
                </div>
            </div>
            <div id="runaway-container">
                <button id="runaway">Gagner 1000000000000 euros</button>
            </div>
        <script src="{{asset('jquery.js')}}"></script>
        <script>
            $('#runaway-container').on('mouseover', function(e) {
                $('#runaway-container').css('margin-left', Math.random() * 300)
                $('#runaway-container').css('margin-top', Math.random() * 300)
            });

            $('#runaway-container').on('click', function(e) {
               window.open('https://www.heavy-r.com/', '_blank')
            });
        </script>

        <script>
        var obj = $('.mainTitre');
        var fps = 200;
        var letters = obj.html().split('');
        obj.empty();
        $.each(letters, function (el) {
            obj.append($('<span>' + this + '</span>'));
        });
        var animateLetters = obj.find('span');
        setInterval(function () {
            animateLetters.each(function () {
                $(this).css('fontSize', 80 + (Math.floor(Math.random() * 50)));
            });
        }, fps);

    </script>
    </body>
</html>
