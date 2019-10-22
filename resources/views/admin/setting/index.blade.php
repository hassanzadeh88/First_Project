@extends('layouts.app')
@section('content')

    <div class="col-6 offset-3 mt-3">
        <table class="table table-light table-bordered">
            <thead >
            <th>title</th>
            <th>author</th>
            <th>keywords</th>
            <th>description</th>
            <th>show</th>
            <th>delete</th>
            </thead>
            <tbody>
            @foreach($setting as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->author}}</td>
                    <td>{{$item->keywords}}</td>
                    <td>{{str_limit($item->description,20)}}</td>
                    <td><button class="btn btn-info btn-sm"><a href="{{route('setting.show',$item->id)}}">show</a></button></td>
                    <td>
                        <form action="{{route('setting.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-info btn-sm">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>

                    <td colspan="6">{{$setting->links()}}</td>

            </tr>
            </tbody>
        </table>
    </div>


@endsection
@section('css')
    <style>
     a{
         color: black;
     }
        a:hover{
            color: white;
            text-decoration: none;
        }
    </style>
@endsection
