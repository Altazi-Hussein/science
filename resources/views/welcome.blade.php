@extends('layouts.app')

@section('content')
<section class="blog-area section">
    <div class="container mt-5">
        <div class="d-flex justify-content-around flex-wrap">
                @foreach ($articles as $article)
                <form action="{{route('articles.show', array('article' => $article))}}" method="get">
                <div class="card mt-3"  style="width: 18vw;">
                    <div class="single-post post-style-1">
                    <div class="blog-image" style="width: 18vw; height: 18vh; background: url('{{asset("storage/$article->thumbnail")}}'); background-size:cover;">
                        {{-- <img src="{{asset("storage/$article->thumbnail")}}" alt="" style="width:100%; height:auto;"> --}}
                        </div>
                        <div class="blog-info d-flex flex-column">
                            <button class="btn mt-2" type="submit"><h4 id="h4">{{$article->title}}</h4></button>
                            {{-- <p>{!!html_entity_decode(str::limit($article->content,20))!!}</p> --}}
                        </div>
                    </div>
                    {{-- <input class="btn btn-success" type="submit" value="Découvrir"> --}}
                </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>

</section>
@endsection

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