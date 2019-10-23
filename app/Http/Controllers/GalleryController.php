<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\createGalleryRequest;
use App\Http\Requests\updateGalleryRequest;
use App\Http\Requests\updateSliderRequest;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery=Gallery::paginate(2);
        return view('admin.gallery.index',compact('gallery'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(createGalleryRequest $request)
    {
        $gallery=new Gallery();
        $file=$request->file('image');
        if (!empty($file)){
            $image=$file->getClientOriginalName();
            $path="images/gallery/".$image;
            if (file_exists($path)){
                $image=bin2hex(random_bytes(10)).$image;
            }
            $file->move('images/gallery',$image);
            $gallery->image=$image;
        }
        $gallery->save();
        session()->flash('store','اطلاعات موردنظر ثبت شد');
        return redirect()->route('gallery.create');
    }

    public function show( $gallery)
    {
        $gallery=Gallery::findOrFail($gallery);
        return view('admin.gallery.show',compact('gallery'));
    }

    public function edit( $gallery)
    {
        $gallery=Gallery::findOrFail($gallery);
        return view('admin.gallery.edit',compact('gallery'));
    }

    public function update(updateGalleryRequest $request,$gallery)
    {
        $gallery=Gallery::findOrFail($gallery);
        $file=$request->file('image');
        if (empty($file)){
            $gallery->image=$gallery->image;
        }
        else{
            $imageOld=$gallery->image;
            $pathDelete="images/gallery/".$imageOld;
            unlink($pathDelete);
            $imageNew=$file->getClientOriginalName();
            $path="images/gallery/".$imageNew;
            if (file_exists($path)){
                $imageNew=bin2hex(random_bytes(10)).$imageNew;
            }
            $file->move("images/gallery" ,$imageNew);
            $gallery->image=$imageNew;
        }
        $gallery->save();
        session()->flash('update' , 'اطلاعات موردنظر ب روزرسانی شد');
        return redirect()->route('gallery.index');
    }

    public function destroy($galleryId)
    {
        $gallery=Gallery::findOrFail($galleryId);
        $pathDelete="images/gallery/".$gallery->image;
        unlink($pathDelete);
        Gallery::destroy($galleryId);
        session()->flash('delete','اطلاعات موردنظر از دیتابیس حذف گردید');
        return redirect()->route('gallery.index');
    }
}
