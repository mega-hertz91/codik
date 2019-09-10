<?php

namespace App\Http\Controllers;


use App\Films;

class elementController extends Controller
{
    public function renderElement($id) {
        $categories = [
            'foreign-movie' => 'Зарубежные фильмы',
            'soviet-cartoon' => 'Советсие мультфильмы',
            'foreign-cartoon' => '
            Зарубежные Мультфильмы',
            'russian-cartoon' => 'Руссикие мультфильмы',
            'anime' => 'Аниме',
            'russian-movie' => 'Русские фильмы'
        ];

       $element = Films::where('film_id', '=', $id)->get();

       return view('single', [
           'element' => $element[0],
           'categories' => $categories
        ]);
    }
}
