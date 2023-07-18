<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerieSeason extends Model
{
    protected $table = 'serie_seasons';

    public function episodes()
    {
        return $this->hasMany(Episode::class, 'serie_season_id');
    }
}
