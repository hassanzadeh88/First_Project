<?php

namespace App\Http\Controllers;

use App\About;
use App\Gallery;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $setting=Setting::orderBy('id')->take(1)->skip(0)->get();
        $slider=Slider::all();
        $about=About::orderBy('id')->take(1)->skip(2)->get();
        $gallery=Gallery::orderBy('id')->take(9)->skip(1)->get();
        return view('index',compact(['setting','slider','about','gallery']));
    }
}
