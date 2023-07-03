<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class MoviePhoto extends Model

{
    use HasFactory;

    protected $table = 'movie_photos';

    protected $fillable = [
        'url',
        'movie',
    ];
    // Define any relationships or additional methods if necessary
}
