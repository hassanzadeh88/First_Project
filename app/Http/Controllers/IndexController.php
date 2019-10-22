<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $setting=Setting::orderBy('id')->take(1)->skip(0)->get();
        return view('index',compact('setting'));
    }
}
