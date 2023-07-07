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

    public function movie()
    {
        return $this->hasOne(Movie::class, 'movie_id', 'id');
    }

    public function actor()
    {
        return $this->hasOne(Actor::class, 'actor_id', 'id');
    }

}
