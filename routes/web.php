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

Route::get('/', function () {
    $categories = DB::table('categories')->get();
    $lots = DB::table('lots')->where('id', 1)->first();

    var_dump($lots);

    return view('index', ['title' => 'Yeticave - интернет аукцион', 'cats' => $categories]);
});

Route::get('/categories', function () {
    $category = '1';

    if(isset($_GET)) {
        $category = $_GET['category_id'];
    }

    $cat = DB::table('categories')->where('id', intval($category))->first();

    return view('categories', ['cat' => $cat]);
});
