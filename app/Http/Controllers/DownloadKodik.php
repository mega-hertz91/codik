<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DownloadKodik extends Controller {

    function __construct($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
    }
}
