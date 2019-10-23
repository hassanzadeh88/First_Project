@extends('layouts.app')
@section('content')
    <div class="col-md-6 offset-3 mt-3">
        <section>
            @if(session('store'))
                <div class="col-md-6 offset-3 mt-2 mb-2 ">
                    <div class="alert bg-info text-dark text-center"><h6>{{session('store')}}</h6></div>
                </div>
            @endif
        </section>
        @include('admin.errors')
        <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="file" name="image" class="form-control p-1">
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
