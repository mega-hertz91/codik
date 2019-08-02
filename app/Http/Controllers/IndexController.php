<?php


namespace App\Http\Controllers;

class IndexController extends Controller
{

    public function renderContent () {
        //Set param response

        $url = 'https://kodikapi.com/list?';
        $token = 'token=955bbb6ff3892fa7b9e5412c7b5fc54a';

        $parametrs = [
            'limit' => 10,
            'materials' => 'true',
            'type' => 'foreign-movie'
        ];

        $send_url = $url . $token .
            '&limit=' . $parametrs['limit'] .
            '&with_material_data='. $parametrs['materials'] .
            '&types=' . $parametrs['type'];

        $content = [];

        // get response

        $result = new DownloadKodik($send_url);

        $result->setParams(CURLOPT_RETURNTRANSFER, true);
        $result->setParams(CURLOPT_NOBODY, true);
        $content = $result->getContent();

        //decode json

        $content = json_decode($content, true);

        //send content in template

        switch ($result->getInfo(CURLINFO_HTTP_CODE)) {
            case 200:
                print ('success');
                break;
            case 404:
                print('Error 404');
                break;
        }

       /*return view('index', [
            'content' => $content['results'],
            'next_page' => $content['next_page'],
            'prev_page' => $content['prev_page'],
        ]);*/
    }
}
