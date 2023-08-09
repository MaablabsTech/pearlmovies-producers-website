<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*use BeyondCode\Comments\Traits\HasComments;*/

class Movie extends Model
{
    /*use HasComments;*/
    
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
    
    public function genres()
    {
        return $this->hasMany(MovieGenre::class, 'movie_id', 'id');
    }
    public function seasons()
    {
        return $this->hasMany(SerieSeason::class, 'movie_id', 'id');
    }
}
