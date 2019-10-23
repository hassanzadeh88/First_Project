@extends('layouts.app')
@section('content')
    <div class="col-6 offset-3 mt-3">
        <table class="table table-light table-bordered table-hover">
            <tbody>
            <tr>
                <td>
                    <h6>{{"id: ".$contact->id}}</h6>
                    <h6>{{"name: ".$contact->fullname}}</h6>
                    <h6>{{"email: ".$contact->email}}</h6>
                    <h6>{{"comment: ".$contact->comment}}</h6>

                </td>
            </tr>
            <tr>
                <td>
                    <a href="{{route('contact.index')}}">come back</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
