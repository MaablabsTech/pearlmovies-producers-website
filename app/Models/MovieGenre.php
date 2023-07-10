<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    use HasFactory;

    protected $table = 'movie_genres';

    protected $fillable = [
        'movie_id',
        'genre_id',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'id', 'movie_id');
    }

    public function genre()
    {
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }
}
