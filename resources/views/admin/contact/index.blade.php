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
            <th>fullname</th>
            <th>email</th>
            <th>comment</th>
            <th>show</th>
            <th>delete</th>
            </thead>
            <tbody>
            @foreach($contact as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{str_limit($item->comment,20)}}</td>
                    <td><button class="btn btn-info btn-sm"><a href="{{route('contact.show',$item->id)}}">show</a></button>
                    </td>
                    <td>
                        <form action="{{route('contact.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-info btn-sm">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>

                <td colspan="6">{{$contact->links()}}</td>

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
