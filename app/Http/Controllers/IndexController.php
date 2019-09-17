<?php


namespace App\Http\Controllers;

use App\Films;

class IndexController extends Controller
{

    public function renderContent () {
        //Set param response
        $categories = [
            'foreign-movie' => 'Зарубежные фильмы',
            'soviet-cartoon' => 'Советсие мультфильмы',
            'foreign-cartoon' => '
            Зарубежные Мультфильмы',
            'russian-cartoon' => 'Руссикие мультфильмы',
            'anime' => 'Аниме',
            'russian-movie' => 'Русские фильмы'
        ];

        $new_film = Films::whereRaw("type='foreign-movie' and year='2019' and kinopoisk_rating > 5")
            ->take(8)
            ->get()
        ;

        return view('index', [
            'categories' => $categories,
            'user' => 1,
            'new_film' => $new_film
        ]);

    }
}
