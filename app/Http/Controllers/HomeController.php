<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

use App\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {       
        $images = App\Slider::all();
        return view('welcome',compact('images'));
    }
}
