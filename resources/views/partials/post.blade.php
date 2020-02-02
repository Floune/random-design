<div class="post" style="transform: rotate({{random_int(-5, 5)}}deg);">
    <div class="titre">
        <h2>{{$post->titre}}</h2>
    </div>
    @if ($post->image)
    <img class="image" src="{{route('photo')}}?id={{$post->id}}&w=320&h=540&fit=contain">
    @endif
    <div class="corps">{{$post->corps}}</div>
    <div> <span class="signature">par {{$post->auteur}} le {{$post->created_at}}</span></div>
</div>

