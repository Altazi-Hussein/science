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
            <a href="{{route('articles.create')}}">Créer un article</a>
        </div>
    </div>

</section>
@endsection