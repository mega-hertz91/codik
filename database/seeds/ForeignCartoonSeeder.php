<?php

use Illuminate\Database\Seeder;

class ForeignCartoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents('public/data/foreign-cartoon.json');
        $data = json_decode($data, true);
        $order = -1;

        foreach ($data as $key => $value) {
            if (isset($value['material_data'])) {
                $order++;
                print($order .  ': ');

                if (isset($value['material_data']['premiere_ru']) == false) {
                    $value['material_data']['premiere_ru'] = 0;
                }

                if (isset($value['material_data']['description']) == false) {
                    $value['material_data']['description'] = '';
                }

                if (isset($value['material_data']['poster_url']) == false) {
                    $value['material_data']['poster_url'] = '/images/poster/unknown.png';
                }

                if (isset($value['material_data']['duration']) == false) {
                    $value['material_data']['duration'] = '';
                }

                if (isset($value['material_data']['kinopoisk_rating']) == false) {
                    $value['material_data']['kinopoisk_rating'] = 0;
                }

                if (isset($value['material_data']['countries']) == false) {
                    $value['material_data']['countries'] = [];
                }

                if (isset($value['material_data']['actors']) == false) {
                    $value['material_data']['actors'] = [];
                }

                if (isset($value['material_data']['producers']) == false) {
                    $value['material_data']['producers'] = [];
                }

                if (isset($value['material_data']['category']) == false) {
                    $value['material_data']['category'] = [];
                }

                if (isset($value['material_data']['genres']) == false) {
                    $value['material_data']['genres'] = [];
                }

                if (isset($value['year']) == false) {
                    $value['year'] = 0;
                }

                if (isset($value['title_orig']) == false) {
                    $value['title_orig'] = '';
                }

                DB::table('films')->insert([
                    'film_id' => $value['id'],
                    'type' => $value['type'],
                    'title' => $value['title'],
                    'title_en' => $value['title_orig'],
                    'year' => $value['year'],
                    'description' => $value['material_data']['description'],
                    'poster_url' => $value['material_data']['poster_url'],
                    'countries' => implode(', ', $value['material_data']['countries']),
                    'actors' => implode(', ', $value['material_data']['actors']),
                    'producers' => implode(', ', $value['material_data']['producers']),
                    'category' => implode(', ', $value['material_data']['genres']),
                    'duration' => $value['material_data']['duration'],
                    'quality' => $value['quality'],
                    'link' => $value['link'],
                    'kinopoisk_rating' => $value['material_data']['kinopoisk_rating'],
                    'premiere_ru' => $value['material_data']['premiere_ru']
                ]);
            }
        }
    }
}
