<?php

namespace App\Http\Controllers;


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

        $url = 'https://kodikapi.com/search?';
        $token = 'token=955bbb6ff3892fa7b9e5412c7b5fc54a';
        $materials = 'true';
        $request = $url . '' . $token . '&id=' . $id . '&with_material_data=' . $materials;
        $content = file_get_contents($request);
        $content = json_decode($content, true);

       return view('single', [
           'elem' => $content['results']['0'],
           'data' => $content['results']['0']['material_data'],
           'categories' => $categories
        ]);
    }
}
