<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieCast extends Model
{
    protected $table = 'movie_casts';

    protected $fillable = [
        'movie_id',
        'actor_id',
        'is_director'
    ];
}
