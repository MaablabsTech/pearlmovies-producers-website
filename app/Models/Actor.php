<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model

{

    protected $fillable = ['name', 'slug', 'career', 'height', 'date_of_birth', 'place_of_birth', 'zodiac'];

}