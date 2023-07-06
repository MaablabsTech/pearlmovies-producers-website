<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'slug',
        'poster_path',
        'is_serie',
        'is_coming_soon',
        'rating',
        'pg_rate',
        'video_quality',
        'runtime',
        'country',
        'release_date',
        'synopsis',
        'status'
    ];

    public function videoQuality()
    {
        return $this->hasOne(VideoQuality::class, 'id', 'video_quality');
    }

    public function moviePhotos()
    {
        return $this->hasMany(MoviePhoto::class, 'movie', 'id');
    }

}
