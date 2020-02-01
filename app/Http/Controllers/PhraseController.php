<?php

namespace App\Http\Controllers;

use App\Cadavre;
use App\Phrase;
use App\Phrasef;
use App\Phrasem;
use App\Post;
use Illuminate\Http\Request;

class PhraseController extends Controller
{

    public function create() {
        return view('haiku.create');
    }

    public function store(Request $request) {
        $phrase = new Phrase();
        $phrasem = new Phrasem();
        $phrasef = new Phrasef();

        $phrase->text = $request->text_1;
        $phrasem->text = $request->text_2;
        $phrasef->text= $request->text_3;

        $phrase->save();
        $phrasem->save();
        $phrasef->save();
        return redirect('/');
    }

    public function reroll() {
        $bodyclr = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        $barreclr = $this->barreclr();
        return response()->json([
            'phrase' => (new Cadavre())->getPhrase(),
            'bodyColor' => $bodyclr,
            'barreColor' => $barreclr,
        ]);

    }

    private function barreclr() {
        return Post::all()->map(function($post) {
           return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        });
    }
}
