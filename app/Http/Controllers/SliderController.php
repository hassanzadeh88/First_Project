<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSliderRequest;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(createSliderRequest $request)
    {
        $slider=new Slider();
        $slider->alt=$request->alt;
        $slider->caption=$request->caption;
        $file=$request->file('image');
        if (!empty($file)){
            $imageName=$file->getClientOriginalName();
            $pathImage="images/slider".$imageName;
            if (file_exists($pathImage)){
                $imageName=bin2hex(random_bytes(10)).$imageName;
            }
            $file->move("images/slider",$imageName);
            $slider->image=$imageName;
        }
        $slider->save();

        return redirect()->route('slider.create');
    }

    public function show(Slider $slider)
    {
        //
    }

    public function edit(Slider $slider)
    {
        //
    }

    public function update(Request $request, Slider $slider)
    {
        //
    }

    public function destroy(Slider $slider)
    {
        //
    }
}
