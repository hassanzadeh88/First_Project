@extends('layouts.app')
@section('content')
    <div class="col-md-6 offset-3 mt-3">
        @include('admin.errors')
        <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <textarea name="about" rows="5" placeholder="please enter your description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="number" name="font" class="form-control" min="14" max="25" value="14">
            </div>
            <div class="form-group">
                <input type="color" name="color" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="send" class="form-control btn-info">
            </div>
        </form>
        <div class="form-group">
            <button class="btn btn-block btn-success"><a href="{{route('about.index')}}">show details</a></button>
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
