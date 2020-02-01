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
        <div style="margin-bottom: 20px;">
            @include('partials.bandeau', ['phrase' => $phrase] )
        </div>
            <div class="content">

                <div class="new-post">
                    <a href="{{route('create')}}"><button>nouveau scandale</button></a>
                </div>

                @foreach($posts ?? '' as $post)
                    @include('partials.post', ['post' => $post])
                    <div class="barounette-jolie" style="width: 100%; height: 12px;transform: rotate({{random_int(0, 180)}}deg); background-color: {{'#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}}"></div>
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
        <script src="{{asset('js/reroll.js')}}">

        </script>
        <script src="{{asset('js/runaway.js')}}">

        </script>
    </body>
</html>
