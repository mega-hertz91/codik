<?php


namespace App\Http\Controllers;


class IndexController extends Controller
{

    public function renderContent () {
        $url = 'https://kodikapi.com/list?';
        $token = 'token=955bbb6ff3892fa7b9e5412c7b5fc54a';

        $parametrs = [
            'limit' => 20,
            'materials' => 'true',
            'type' => 'foreign-movie'
        ];

        $send_url = $url . $token .
            '&limit=' . $parametrs['limit'] .
            '&with_material_data='. $parametrs['materials'] .
            '&types=' . $parametrs['type'];

        //$content = file_get_contents( );
        //$content = json_decode($content);

        $result = new DownloadKodik($send_url);

        var_dump($result);


        /*return view('index', [
            'content' => $content['results'],
            'next_page' => $content['next_page'],
            'prev_page' => $content['prev_page'],
        ]);*/
    }
}
