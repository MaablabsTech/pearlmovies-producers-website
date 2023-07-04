<?php

namespace Database\Seeders;

use App\Models\Actor;

use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actors = [

            [

                'name' => 'Mutebi Andrew Elvis',

                'slug' => 'mutebi-andrew-elvis',

                'career' => 'actor',

                'height' => '1.6',

                'date_of_birth' => '1990-06-24',

                'place_of_birth' => 'Kampala',

                'zodiac' => 'Aries',

            ],

        ];

        foreach ($actors as $actor) {

            Actor::create($actor);

        }
    }
}
