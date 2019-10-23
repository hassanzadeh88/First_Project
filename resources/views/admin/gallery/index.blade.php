@extends('layouts.app')
@section('content')

    <div class="col-6 offset-3 mt-3">


        <section>
            @if(session('delete'))
                <div class="col-md-6 offset-3 mt-2 mb-2 ">
                    <div class="alert bg-info text-dark text-center"><h6>{{session('delete')}}</h6></div>
                </div>
            @endif
        </section>
        <section>
            @if(session('update'))
                <div class="col-md-6 offset-3 mt-2 mb-2 ">
                    <div class="alert bg-info text-dark text-center"><h6>{{session('update')}}</h6></div>
                </div>
            @endif
        </section>

        <table class="table table-light table-bordered text-center">
            <thead >
            <th>id</th>
            <th>image</th>
            <th>show</th>
            <th>update</th>
            <th>delete</th>
            </thead>
            <tbody>
            @foreach($gallery as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset("images/gallery/".$item->image)}}" width="50px" height="50px"></td>
                    <td><button class="btn btn-info btn-sm"><a href="{{route('gallery.show',$item->id)}}">show</a></button></td>
                    <td><button class="btn btn-info btn-sm"><a href="{{route('gallery.edit',$item->id)}}">update</a></button></td>

                    <td>
                        <form action="{{route('gallery.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-info btn-sm">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr >

                 <td colspan="5">{{$gallery->links()}}</td>

            </tr>
            </tbody>
        </table>
        <div class="col-6 col-3 mt-3">
            <button class="btn btn-info btn-sm"><a href="{{route('gallery.create')}}">come back to create</a></button>
        </div>
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
