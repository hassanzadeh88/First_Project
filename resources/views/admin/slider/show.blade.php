@extends('layouts.app')
@section('content')
    <div class="col-6 offset-3 mt-3">
        <table class="table table-light table-bordered table-hover">
            <tbody>
            <tr>
                <td>
                    <h6>{{$slider->alt}}</h6>
                    <h6>{{$slider->caption}}</h6>
                    <h6><img src="{{asset("images/slider/".$slider->image)}}" width="80px" height="80px"></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="{{route('slider.index')}}">come back</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
