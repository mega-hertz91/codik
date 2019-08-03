<?php


namespace App\Http\Controllers;


class categoryController extends Controller
{
    public function renderCategory ($cat) {
        //Set param response

        $url = 'https://kodikapi.com/list?';
        $token = 'token=955bbb6ff3892fa7b9e5412c7b5fc54a';

        $parametrs = [
            'limit' => 20,
            'materials' => 'true',
            'type' => $cat,
            'sort' => 'year',
            'camrip' => 'false',
            'kinopoisk_raring' => '7.5-8.2'
        ];

        $send_url = $url . $token .
            '&limit=' . $parametrs['limit'] .
            '&with_material_data='. $parametrs['materials'] .
            '&types=' . $parametrs['type'] .
            '&sort=' . $parametrs['sort'] .
            '&camrip=' . $parametrs['camrip'] .
            '&kinopoisk_rating=' .  $parametrs['kinopoisk_raring'];


        // get response

        var_dump($send_url);

        $result = new DownloadKodik($send_url);

        $result->setParams(CURLOPT_RETURNTRANSFER, true);

        $content = $result->getContent();

        //decode json

        $content = json_decode($content, true);

        return view('category', [
            'content' => $content['results'],
            'next_page' => $content['next_page']
        ]);

    }
}