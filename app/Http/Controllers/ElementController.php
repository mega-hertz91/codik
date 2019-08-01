<?php


namespace App\Http\Controllers;


class ElementController extends Controller
{
    public function renderElement($id) {
        $url = 'https://kodikapi.com/search?';
        $token = 'token=955bbb6ff3892fa7b9e5412c7b5fc54a';
        $materials = 'true';
        $types = 'foreign-movie';
        $request = $url . '' . $token . '&id=' . $id . '&with_material_data=' . $materials;
        $content = file_get_contents($request);
        $content = json_decode($content, true);

        print_r($content['results'][0]['title']);
    }
}
