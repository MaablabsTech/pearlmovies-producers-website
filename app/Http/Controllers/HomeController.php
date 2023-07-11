<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function index()

    {
        $setting = Setting::first();

        $featured_movies = Movie::orderBy('created_at', 'desc')
                                ->limit(10)
                                ->get();
        $data = [
            'system_name' => $setting->system_name,
            'setting' => $setting,
            'featured_movies' => $featured_movies,
        ];

        if ($setting->home_page_style === 'slider') {
            return view('home.index_slider', ['data' => $data, 'featured_movies' => $featured_movies]);
        } else {
            return view('home.index')->with($data);
        }
    }
}
