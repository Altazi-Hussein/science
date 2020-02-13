<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('head')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<html>
    <body style="height: 100vh;">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div style="height: 300px; background: url('{{asset('images/slider-1.jpg')}}'); background-size:cover;">
</div>


<section class="blog-area section">
    <div class="container mt-5">
        <div class="d-flex justify-content-around flex-wrap">

                @foreach ($articles as $article)
                <form action="{{route('articles.show', array('article' => $article))}}" method="get">
                <div class="card mt-3"  style="width: 18vw;">
                    <div class="single-post post-style-1">
                    <div class="blog-image" style="width: 18vw; height: 18vh; background: url('{{asset("$article->thumbnail")}}'); background-size:cover;">
                        {{-- <img src="{{asset("$article->thumbnail")}}" alt="" style="width:100%; height:auto;"> --}}
                        {{$article->thumbnail}}
                        </div>
                        <div class="blog-info">
                            <h1 class="text-center">{{$article->title}}</h1>
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="Découvrir">
                </div>
                </form>
                  {{--   {{$article}}<br> --}}
                @endforeach
                <div class="card mt-3"  style="width: 18vw;">
                    <div class="single-post post-style-1">
                        <div class="blog-image">
                            <img src="{{asset('images/averie-woodard-319832.jpg')}}" alt="">
                        </div>
                        <a class="avatar" href="#">Clique</a>
                        <div class="blog-info">
                            cepok
                        </div>
                    </div>
                </div>
                <div class="card mt-3"  style="width: 18vw;">
                    <div class="single-post post-style-1">
                        <div class="blog-image">
                            <img     src="{{asset('images/averie-woodard-319832.jpg')}}" alt="">
                        </div>
                        <a class="avatar" href="#">Clique</a>
                        <div class="blog-info">
                            cepok
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="width: 18vw;">
                    <div class="single-post post-style-1">
                        <div class="blog-image">
                            <img src="{{asset('images/averie-woodard-319832.jpg')}}" alt="">
                        </div>
                        <a class="avatar" href="#">Clique</a>
                        <div class="blog-info">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus repudiandae deserunt beatae rerum corrupti, saepe dignissimos. Nisi hic voluptatum quidem quo laborum. Iste accusantium repudiandae quibusdam vero incidunt commodi delectus.
                        </div>
                    </div>
                </div> {{-- Fin de card --}}
                <div class="card mt-3"  style="width: 18vw;">
                    <div class="single-post post-style-1">
                        <div class="blog-image">
                            <img src="{{asset('images/averie-woodard-319832.jpg')}}" alt="">
                        </div>
                        <a class="avatar" href="#">Clique</a>
                        <div class="blog-info">
                            cepok
                        </div>
                    </div>
                </div> {{-- Fin de card --}}

                
                
            </div>
        </div>
    </div>

</section>

</body>
</html>


{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
 --}}