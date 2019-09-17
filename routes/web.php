<?php

use Illuminate\Support\Facades\DB;

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

Route::get('/', 'IndexController@renderContent');
Route::get('/category/{id}', 'CategoryController@renderCategory');
Route::get('/element/{id}', 'ElementController@renderElement');
Route::get('/upload/films', 'Upload@uploadFilms');
/*Route::get('/base', function () {
    $data = DB::table('films')->distinct()->get();
    $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    file_put_contents('data/all.json', $data);
    print('success');

    // Export base in .json
});*/
