<section class="contact">
    <section class="row ml-0 mr-0">
        <section class="col-10 offset-1">
            <h1 class="text-center text-capitalize">contact us</h1>
            <section class="borderContact mb-5"></section>
            <section class="row ml-0 mr-0">

                <section class="col-8 offset-2">
                    <section>
                        @if(session('store'))
                            <div class="col-md-6 offset-3 mt-2 mb-2 ">
                                <div class="alert bg-info text-dark text-center"><h6>{{session('store')}}</h6></div>
                            </div>
                        @endif
                    </section>
                    @include('admin.errors')
                    <form action="{{route('contact.data')}}" method="post">
                        @csrf
                        <section class="form-group">
                            <label for="fullname">fullname</label>
                            <input type="text" name="fullname" placeholder="please enter fullName?"
                                   class="form-control" id="fullname">
                        </section>
                        <section class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" placeholder="please enter email?" class="form-control"
                                   id="email">
                        </section>
                        <section class="form-group">
                            <label for="comment">comment</label>
                            <textarea name="comment" id="comment" class="form-control"
                                      placeholder="please enter your comment? "></textarea>
                        </section>
                        <section class="form-group">
                            <input type="submit" value="submit" class="btn btn-success btn-block">
                        </section>
                    </form>
                </section>
            </section>

        </section>
    </section>
</section>
