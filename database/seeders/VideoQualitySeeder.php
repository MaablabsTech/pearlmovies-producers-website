<?php

namespace Database\Seeders;

use App\Models\VideoQuality;
use Illuminate\Database\Seeder;

class VideoQualitySeeder extends Seeder

{
    public function run()
    {
        $defaultQualities = [
            ['name' => '4K FullHD', 'slug' => '4k-fullhd'],
            ['name' => '2K FullHD', 'slug' => '2k-fullhd'],
            ['name' => '1080p', 'slug' => '1080p'],
            ['name' => '1080', 'slug' => '1080'],
            ['name' => '720', 'slug' => '720'],
        ];
        foreach ($defaultQualities as $quality) {
            VideoQuality::create($quality);
        }

    }

}