<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class HeroesController extends Controller
{
    public function index()
    {
    	$sliders = Slider::all();
        return view('frontend.index', compact('sliders'));
    }
}
