@extends('layouts.app')
@section('content')


    <div class="col-6 offset-3 mt-3">

        <div class="col-6 offset-3 mt-2 mb-2">
            <section class="bg-info text-center">
                @include('admin.errors')
            </section>
        </div>

        <form action="{{route('setting.store')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="title" placeholder="enter title" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <input type="text" name="author" placeholder="enter author" class="form-control" value="{{old('author')}}">
            </div>
            <div class="form-group">
               <textarea name="keywords" placeholder="enter keywords..." row="5" class="form-control">{{old('keywords')}}</textarea>
            </div>
            <div class="form-group">
                <textarea name="description" id="" rows="5" placeholder="enter description..."
                          class="form-control">{{old('description')}}</textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="send" class="form-control btn-info">
            </div>
        </form>
        <div class="form-group">
            <button class="btn btn-block btn-success"><a href="{{route('setting.index')}}">show details</a></button>
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
