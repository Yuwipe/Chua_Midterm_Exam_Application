<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function showAnimeProducts()
    {
        $Anime = [
            'Anime Figure',
            'Character Acrylic Stand',
            'Pins',
            'Stickers',
            'Cosplay Costumes',
            'Cosplay Wigs',
            'Official Merchs',
            'Anime Mugs',
            'Chibi Figure',
            'Anime Cards',
            'Posters'
        ];
    }
}
