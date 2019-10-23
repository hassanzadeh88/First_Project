<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{'mywebsite' }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">

        <div class="d-none"><h1>{{ $user= \Illuminate\Support\Facades\Auth::user() }}</h1></div>
        @if($user)
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/administrator/setting/create')}}">Setting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/administrator/slider/create')}}">Slider</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/administrator/about/create')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/administrator/gallery/create')}}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/administrator/contact')}}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}" target="_blank">Show_WebSite</a>
                            </li>
                            <li class="nav-item " >
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </nav>

                @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>




