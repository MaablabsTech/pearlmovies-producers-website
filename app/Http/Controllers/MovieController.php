<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public movie_details(string $slug) {
        
        $movie = Movie::where('slug', $slug)->get();

        if (!is_null($movie)) {
            return view('movie.detail')->with($movie);
        } else {
            redirect('/');
        }
    }
}
