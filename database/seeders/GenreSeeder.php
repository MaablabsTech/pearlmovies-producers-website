<?php

namespace Database\Seeders;

use App\Models\Genre;

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [

            ['name' => 'Action', 'slug' => 'action'],

            ['name' => 'Drama', 'slug' => 'drama'],

            ['name' => 'Comedy', 'slug' => 'comedy'],

            ['name' => 'Romance', 'slug' => 'romance'],

        ];

        Genre::insert($genres);
    }
}
