<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Movies
        $movies = [
            [
                'title' => 'I Dream in Another Language',
                'slug' => 'i-dream-in-another-language',
                'poster_path' => 'default',
                'is_serie' => 0,
                'is_coming_soon' => 1,
                'rating' => '8.7',
                'pg_rate' => '16+',
                'video_quality' => 1,
                'runtime' => '120min',
                'country' => 'USA',
                'release_date' => '05-02-2023',
                'synopsis' => 'When a renowned archaeologist goes missing, his daughter sets out on a perilous journey to the heart of the Amazon rainforest to find him. Along the way, she discovers a hidden city and a dangerous conspiracy that threatens the very balance of power in the world. With the help of a charming rogue, she must navigate treacherous terrain and outwit powerful enemies to save her father and uncover the secrets of the lost city. A down-on-his-luck boxer struggles to make ends meet while raising his young son. When an old friend offers him a chance to make some quick cash by fighting in an illegal underground boxing tournament, he sees it as his last shot at redemption. But as the stakes get higher and the fights get more brutal, he must confront his own demons and find the strength to win not just for himself, but for his son. A brilliant scientist discovers a way to harness the power of the ocean\'s currents to create a new, renewable energy source. But when her groundbreaking technology falls into the wrong hands, she must race against time to stop it from being used for evil. Along the way, she must navigate complex political alliances and confront her own past to save the world from disaster.',
                'status' => 1
            ]
        ];
    }
}
