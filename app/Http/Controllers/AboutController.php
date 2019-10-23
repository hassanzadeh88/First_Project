<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Requests\createAbouteRequest;
use App\Slider;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $about=About::paginate(2);
        return view('admin.about.index',compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(createAbouteRequest $request)
    {
        $about=About::create([
            'about'=>$request->about,
            'font'=>$request->font,
            'color'=>$request->color
        ]);
        return redirect()->route('about.create');
    }

    public function show( $about)
    {
        $about=About::findOrFail($about);
        return view('admin.about.show',compact('about'));
    }

    public function edit(About $about)
    {
        //
    }

    public function update(Request $request, About $about)
    {
        //
    }

    public function destroy( $about)
    {
        About::destroy($about);
        session()->flash('delete','اطلاعات موردنظر از دیتابیس پاک شد');
        return redirect()->route('about.index');
    }
}
