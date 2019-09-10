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
        $this->call(FilmsTableSeeder::class);
        $this->call(RussianFilmsTableSeeder::class);
    }
}
