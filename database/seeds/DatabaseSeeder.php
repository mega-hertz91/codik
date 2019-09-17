<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // composer dump-autoload
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(FilmsTableSeeder::class);
        $this->call(RussianFilmsTableSeeder::class);
        $this->call(ForeignCartoonSeeder::class);
        $this->call(RussianCartoonSeeder::class);
        $this->call(SovietCartoonSeeder::class);
        $this->call(RussianSerialSeeder::class);
        $this->call(ForeignSerialSeeder::class);*/

        $data = file_get_contents('public/data/all.json');
        $data = json_decode($data, true);
        $order = -1;

        foreach ($data as $key => $value) {
            DB::table('films')->insert([
                'film_id' => $value['id'],
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
        }
    }
}
