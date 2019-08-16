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
            $table->increments('id')->unique();
            $table->char(255, 'film-id');
            $table->char('title', 255);
            $table->char('title_en', 255);
            $table->integer('year');
            $table->text('tag_line');
            $table->text('description');
            $table->text('poster_url');
            $table->text('countries');
            $table->integer('kinopoisk_rating');
            $table->date('premiere_ru');
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
