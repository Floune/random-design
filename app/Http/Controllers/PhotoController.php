<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;

class PhotoController extends Controller
{
    public  $server;

    public function __construct() {
        $this->server = ServerFactory::create([
            //'max_imae_size' => 1200*800,
            'response' =>new LaravelResponseFactory(app('request')),
            'source' => public_path('/uploads/ghetto'),
            'cache' => public_path('/cache'),
            'cache_path_prefix' => '.cache'
        ]);
    }
    public function resolvePhoto(Request $request) {
         $id = explode('/' , $request->q)[2];
         $path = Post::find($id)->image;
         return $this->server->getImageResponse($path, $request->all());
    }
}
