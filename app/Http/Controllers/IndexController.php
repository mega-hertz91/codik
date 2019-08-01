<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function renderContent () {
        $token = 'https://kodikapi.com/list?token=955bbb6ff3892fa7b9e5412c7b5fc54a';
        $limit = '10';
        $materials = 'true';
        $types = 'foreign-movie';
        $content = file_get_contents( $token . '&limit=' . $limit . '&with_material_data='. $materials . '&types=' . $types);
        $content = json_decode($content, true);

        return view('index', [
            'content' => $content['results'],
            'next_page' => $content['next_page'],
            'prev_page' => $content['prev_page'],
        ]);
    }
}
