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

    <body style="background-color: {{'#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)}};">
        <button id="runaway">Ce site utilise des cookies et tout le monde s'en branle</button>
        <div style="margin-bottom: 20px;">
            @include('partials.bandeau', ['phrase' => $phrase] )
        </div>
            <div class="content">

                <div class="zguegue-button">
                    <div class="zguegue-button2">
                        <a class="blink-zguegue" href="{{route('zguegue')}}" style=" color: {{$randColor}} ">ZGUEGUE</a>
                    </div>
                </div>

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


        <script src="{{asset('jquery.js')}}"></script>
        <script src="{{asset('js/reroll.js')}}"></script>
        <script src="{{asset('js/runaway.js')}}"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{asset('js/draggable.js')}}"></script>
    </body>
</html>
