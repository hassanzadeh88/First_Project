@extends('layouts.app')
@section('content')
    <div class="col-md-6 offset-3 mt-3">
        @include('admin.errors')

        <form action="{{route('gallery.update',$gallery->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="file" name="image" class="form-control p-1">
                <img src="{{asset("images/gallery/".$gallery->image)}}" width="120px" height="100px" class="mt-2">
            </div>
            <div class="form-group">
                <input type="submit" value="send" class="form-control btn-info">
            </div>
        </form>
        <div class="form-group">
            <button class="btn btn-block btn-success"><a href="{{route('gallery.index')}}">show details</a></button>
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
