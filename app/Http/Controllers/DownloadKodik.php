<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DownloadKodik extends Controller {

    private $ch;

    function __construct($url) {
        $this->ch = curl_init($url);
    }

    public function getContent () {
        return curl_exec($this->ch);
    }

    public function closeConnect () {
        return curl_close($this->ch);
    }

    public function setParams ($param_name, $param_ceil) {
        return curl_setopt($this->ch, $param_name, $param_ceil );
    }

    public function getInfo ($param) {
        return curl_getinfo($this->ch, $param);
    }

    public function resetParam() {
        return curl_reset($this->ch);
    }
}
