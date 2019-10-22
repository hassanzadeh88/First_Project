@extends('layouts.app')
@section('content')
    <div class="col-6 offset-3 mt-3">
        <table class="table table-light table-bordered table-hover">
            <tbody>
            <tr>
               <td>
                   <h6>{{$setting->title}}</h6>
                   <h6>{{$setting->author}}</h6>
                   <h6>{{$setting->keywords}}</h6>
                   <h6>{{$setting->description}}</h6>
               </td>
            </tr>
            <tr>
                <td>
                    <a href="{{route('setting.index')}}">come back</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
