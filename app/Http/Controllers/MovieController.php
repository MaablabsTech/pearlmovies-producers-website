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
<<<<<<< HEAD
            redirect('/');
=======
            return redirect()->route('home');
>>>>>>> 73f3639896008c9ec7f871848018ccee2fa6b048
        }
    }
}
