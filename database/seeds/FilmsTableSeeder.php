<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents('http://m-store/data/all.json');
        $data = json_decode($data, true);
        $order = -1;

        foreach ($data['fms'] as $value) {
            print($order);

            DB::table('films')->insert([
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

            $order++;
        }
    }
}
