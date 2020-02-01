<?php

namespace App\Http\Controllers;

use App\Cadavre;
use App\Post;
use Illuminate\Http\Request;

class PhraseController extends Controller
{
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
