<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->where('status', 1)->first();

        if (!$page) {
            abort(404);
        }

        return view('empty', compact('page'));
    }
}
