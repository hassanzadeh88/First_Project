@extends('layouts.app')
@section('content')
    <div class="col-md-6 offset-3 mt-3">
        @include('admin.errors')
        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="alt" placeholder="enter alt for image" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="caption" placeholder="enter caption for image" class="form-control">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control p-1">
            </div>
            <div class="form-group">
                <input type="submit" value="send" class="form-control btn-info">
            </div>
        </form>
    </div>
@endsection
