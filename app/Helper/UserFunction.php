<?php
/**
 * Created by PhpStorm.
 * User: PROGRAM
 * Date: 16.07.2019
 * Time: 20:56
 */

namespace App\Helper;


class UserFunction
{
    public function get_date_finish ($import_date) {
        $date_now = strtotime('now');
        $date_current = strtotime($import_date);

        $date_result = $date_current - $date_now;

        if ($date_result <= 0) {
            $date_result = 0;
        }

        return  round($date_result / 3600);
    }
}
