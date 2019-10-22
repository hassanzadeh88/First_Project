<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $slider=Slider::paginate(3);
        return view('admin.slider.index',compact('slider'));
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
        if ( !empty($file)){
            $image=$file->getClientOriginalName();
            $pathImage="images/slider/".$image;
            if (file_exists($pathImage)){
                $image=bin2hex(random_bytes(10)).$image;
            }
            $file->move("images/slider",$image);
            $slider->image=$image;
        }
        $slider->save();

        return redirect()->route('slider.create');
    }

    public function show( $slider)
    {
        $slider=Slider::findOrFail($slider);
        return view('admin.slider.show',compact('slider'));
    }

    public function edit( $slider)
    {
        $slider=Slider::findOrFail($slider);
        return view('admin.slider.edit',compact('slider'));
    }

    public function update(updateSliderRequest $request, $slider)
    {
        $slider=Slider::findOrFail($slider);
        $slider->alt=$request->alt;
        $slider->caption=$request->caption;
        $file=$request->file('image');
        if ( empty($file)){
            $slider->image=$slider->image;
        }
        else {
            $imageOld=$slider->image;
            $pathDelete="images/slider/".$imageOld;
            unlink($pathDelete);
            $imageNew=$file->getClientOriginalName();
            $path="images/slider/".$imageNew;
            if (file_exists($path)){
                $imageNew=bin2hex(random_bytes(10)).$imageNew;
            }
            $file->move('images/slider',$imageNew);
            $slider->image=$imageNew;
        }
        $slider->save();
        session()->flash('update','اطلاعات موردنظر بروزرسانی شد');
        return redirect()->route('slider.index');
    }

    public function destroy($sliderId)
    {
        $slider=Slider::findOrFail($sliderId);
        $pathDelete="images/slider/".$slider->image;
        unlink($pathDelete);
        Slider::destroy($sliderId);
        session()->flash('delete','اطلاعات موردنظر از دیتابیس پاک شد');
        return redirect()->route('slider.index');
    }
}
