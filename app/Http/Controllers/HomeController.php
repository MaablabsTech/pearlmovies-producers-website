<?php



namespace App\Http\Controllers;



use App\Models\Setting;

use Illuminate\Http\Request;



class HomeController extends Controller

{
    public function index()

    {
        $setting = Setting::first();

        $data = [
            'system_name' => $setting->system_name,
            'setting' => $setting,
        ];

        if ($setting->home_page_style === 'slider') {
            return view('home.index_slider')->with($data);
        } else {
            return view('home.index')->with($data);
        }
    }
}
