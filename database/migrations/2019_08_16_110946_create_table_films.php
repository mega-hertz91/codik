<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->char('film_id', 255);
            $table->char('title', 255);
            $table->char('title_en', 255);
            $table->integer('year');
            $table->text('description');
            $table->text('poster_url');
            $table->text('countries');
            $table->text('actors');
            $table->string('category');
            $table->string('duration');
            $table->string('quality');
            $table->string('link');
            $table->integer('kinopoisk_rating');
            $table->string('premiere_ru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
