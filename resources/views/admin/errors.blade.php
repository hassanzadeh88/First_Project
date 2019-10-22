<div class="col-6 offset-3 mt-2 mb-2">
    <section class="bg-info text-center">
@if($errors->any())

        @foreach($errors->all() as $error )
            <h6 class="p-1">{{$error}}</h6>
        @endforeach

    @endif
    </section>
</div>
