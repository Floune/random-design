<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Cadavre;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phrase = (new Cadavre())->getPhrase();

        $posts = Post::orderBy('created_at', 'DESC')->paginate(20);
        return view('welcome', compact('posts', 'phrase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = new Post();
        $rx = "^(http(s)?:\/\/)?((w){3}.)?youtu(be|.be)?(\.com)?\/.+^";
        $has_match = preg_match($rx, $request->input('utub'), $matches);
        if ($has_match) {
            $post->utub = $this->convertYoutube($request->input('utub'));
        }
        $post->titre = $request->input('titre');
        $post->auteur = $request->input('auteur') ? $request->input('auteur') : 'anonyme';
        $post->corps = $request->input('corps');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $post->image = $filename;
            Storage::disk('public')->put('ghetto/'.$filename, File::get($image));
        }

        $post->save();
        return redirect('/');
    }

    function convertYoutube($string) {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
            $string
        );
    }

}
