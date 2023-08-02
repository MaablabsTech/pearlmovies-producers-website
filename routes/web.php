<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Models\Setting;
use App\Models\Movie;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home/slider', function () {

    $setting = Setting::first();

        $featured_movies = Movie::orderBy('created_at', 'desc')
                                ->limit(10)
                                ->get();
        $recent_movies = Movie::where('is_serie', 0)
                                ->orderBy('created_at', 'desc')
                                ->limit(10)
                     
                                ->get();
        $recent_series = Movie::where('is_serie', 1)
                                ->orderBy('created_at', 'desc')
                                ->limit(10)
                                ->get();

        $data = [
            'system_name' => $setting->system_name,
            'setting' => $setting,
            'featured_movies' => $featured_movies,
            'recent_movies' => $recent_movies,
            'recent_series' => $recent_series,
        ];

    return view('home.index_slider')->with($data);
    
})->name('home.slider');

Route::get('/movie/{slug}', [MovieController::class, 'movie_detail'])->name('movie.detail');
Route::get('page/{slug}', [PageController::class, 'index'])->name('page');