<?php

namespace App\Http\Controllers;

use App\Http\Requests\createRequestSetting;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting=Setting::paginate(3);
        return view('admin.setting.index',compact('setting'));
    }

    public function create()
    {
        return view('admin.setting.create');
    }

    public function store(createRequestSetting $request)
    {
         $setting=Setting::create([
             'title'=>$request->title,
             'author'=>$request->author,
             'keywords'=>$request->keywords,
             'description'=>$request->description
         ]);
         return redirect()->route('setting.create');
    }

    public function show( $setting)
    {
       $setting=Setting::findOrFail($setting);
       return view('admin.setting.show',compact('setting'));
    }

    public function edit(Setting $setting)
    {
        //
    }

    public function update(Request $request, Setting $setting)
    {
        //
    }

    public function destroy($setting)
    {
        Setting::destroy($setting);
        return redirect()->route('setting.index');
    }
}
