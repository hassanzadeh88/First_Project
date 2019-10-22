@extends('layouts.app')
@section('content')
    <div class="col-md-6 offset-3 mt-3">
        @include('admin.errors')
        <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" name="alt" placeholder="enter alt for image" class="form-control" value="{{$slider->alt}}">
            </div>
            <div class="form-group">
                <input type="text" name="caption" placeholder="enter caption for image" class="form-control" value="{{$slider->caption}}">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control p-1">
                <img src="{{asset("images/slider/".$slider->image)}}" width="120px" height="100px" class="mt-2">
            </div>
            <div class="form-group">
                <input type="submit" value="send" class="form-control btn-info">
            </div>
        </form>
        <div class="form-group">
            <button class="btn btn-block btn-success"><a href="{{route('slider.index')}}">show details</a></button>
        </div>
    </div>
@endsection
@section('css')
    <style>
        a{
            color: black;
        }
        a:hover{
            text-decoration: none;
            color: white;
        }
    </style>
@endsection
