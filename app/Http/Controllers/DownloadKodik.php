<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DownloadKodik extends Controller {
    public function getData() {
        $data = file_get_contents('http://films/data/foreign-movie.json');
        $data = json_decode($data, true);
        $order = -1;

        foreach ($data as $key => $value) {
            $order++;
            print($order .  ': ');
            if (isset($value['material_data'])) {
                print ('true <br>');
            } else {
                print ('false <br>');
            }
        }
    }
}
