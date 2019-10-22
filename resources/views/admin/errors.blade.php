@if($errors->any())

        @foreach($errors->all() as $error )
            <h6 class="p-1">{{$error}}</h6>
        @endforeach

    @endif
