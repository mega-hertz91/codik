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

Route::get('/', function () {
    $categories = DB::table('categories')->get();
    $lots = DB::table('lots')
        ->select('lots.id', 'lots.name', 'lots.start_price', 'lots.start_date', 'lots.image', 'categories.name AS cat_name')
        ->leftJoin('categories', function ($join) {
            $join->on('lots.category_id', '=', 'categories.id');
        })
        ->limit(6)
        ->get();

    return view('index',
        [
        'title' => 'Yeticave - интернет аукцион', 'cats' => $categories,
        'lots' => $lots
        ]
    );
});

Route::get('/categories/{id}', 'CategoriesController@getCategories');
Route::get('/lot/{id}', 'CategoriesController@getLotId');
Route::get('/all', 'CategoriesController@getLotAll');
