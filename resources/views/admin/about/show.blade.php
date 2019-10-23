@extends('layouts.app')
@section('content')
    <div class="col-6 offset-3 mt-3">
        <table class="table table-light table-bordered table-hover">
            <tbody>
            <tr>
                <td>
                    <h6>{{"id: ".$about->id}}</h6>
                    <h6>{{"paragraph: ".$about->about}}</h6>
                    <h6>{{"font size is: ".$about->font}}</h6>
                    <h6>{{"color hexCode: ".$about->color}}</h6>

                </td>
            </tr>
            <tr>
                <td>
                    <a href="{{route('about.index')}}">come back</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
