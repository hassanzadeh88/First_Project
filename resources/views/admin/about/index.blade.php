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

        <table class="table table-light table-bordered text-center">
            <thead >
            <th>id</th>
            <th>about</th>
            <th>font</th>
            <th>color</th>
            <th>show</th>
            <th>delete</th>
            </thead>
            <tbody>
            @foreach($about as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->font}}</td>
                    <td>{{str_limit($item->about,20)}}</td>
                    <td>
                        <div style="width: 90px;margin-left: 25px;height: 30px;background-color: {{$item->color}};">{{$item->color}}</div>
                    </td>
                    <td><button class="btn btn-info btn-sm"><a href="{{route('about.show',$item->id)}}">show</a></button>
                    </td>
                    <td>
                        <form action="{{route('about.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-info btn-sm">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>

                <td colspan="6">{{$about->links()}}</td>

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
