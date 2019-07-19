<?php
/**
 * Created by PhpStorm.
 * User: PROGRAM
 * Date: 18.07.2019
 * Time: 19:18
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class FunctionServiceProvider extends ServiceProvider
{
    public function register () {
        $this->app->bind('UserFunction', 'App\Helper\UserFunction');
    }
}
