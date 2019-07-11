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
   if(empty(DB::connection()->getDatabaseName())) {
       $categories = DB::table('categories')->get();
       $lots = DB::table('lots')->where('id', 1)->first();

       var_dump($lots);

       return view('index', ['title' => 'Yeticave - интернет аукцион', 'cats' => $categories]);
   } else {
       print ('Подключение к базе данных отсутствует ');
       print_r (DB::connection()->getDatabaseName());
   };
});

Route::get('/categories/{id}', 'CategoriesController@show');
