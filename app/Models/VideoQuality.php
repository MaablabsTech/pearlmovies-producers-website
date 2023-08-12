<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class VideoQuality extends Model
{

    protected $table = 'video_quality';
    protected $fillable = [
        'name',
        'slug',
    ];
}