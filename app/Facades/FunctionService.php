<?php
/**
 * Created by PhpStorm.
 * User: PROGRAM
 * Date: 18.07.2019
 * Time: 19:33
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class FunctionService extends Facade
{
    protected static function getFacadeAccessor()
    {
       return 'UserFunction';
    }
}
