<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@getContent');
Route::get('/categories/{id}', 'CategoriesController@getCategories');
Route::get('/lot/{id}', 'CategoriesController@getLotId');
Route::get('/all', 'CategoriesController@getLotAll');
