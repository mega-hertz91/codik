<?php

use Illuminate\Support\Facades\DB;
use App\Films;
use App\Fms;
use App\Movies;

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
Route::get('/base', function () {
    $data = Movies::all()->unique('title_en')->toArray();
    $target_data = Fms::all()->toArray();
    $new_data = [];


   // var_dump(count($data));

 /*   $count = 1;

   foreach ($data as $value) {


        DB::table('fms')->insert([
            'id' => $count,
            'film_id' => $value['film_id'],
            'type' => $value['type'],
            'title' => $value['title'],
            'title_en' => $value['title_en'],
            'year' => $value['year'],
            'description' => $value['description'],
            'poster_url' => $value['poster_url'],
            'countries' => $value['countries'],
            'actors' => $value['actors'],
            'producers' => $value['producers'],
            'category' => $value['category'],
            'duration' => $value['duration'],
            'quality' => $value['quality'],
            'link' => $value['link'],
            'kinopoisk_rating' => $value['kinopoisk_rating'],
            'premiere_ru' => $value['premiere_ru']
        ]);
        $count++;

        print "Success unique name" . $value['id'];
    }

    //  var_dump(count(DB::table('films')->where('title', 'Один дома')->get()));*/

    $data = file_get_contents('../public/data/all.json');
    $data = json_decode($data, true);

    var_dump($data);

});
