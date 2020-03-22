@extends('layouts.app')

@section('anecdote')
<h4 class="text-center shadow p-3 mb-5 bg-white rounded">
    {{$anecdote[0]->content}}
    @if ($anecdote[0]->article)
        <a href="{{route('articles.show', $anecdote[0]->article_id)}}">Découvrir l'article</a>
    @endif
</h4>
@endsection

@section('content')
<section class="blog-area section">
    <div class="container">
        <div class="d-flex justify-content-around flex-wrap">
                @foreach ($articles as $article)
                <form action="{{route('articles.show', array('article' => $article))}}" method="get">
                <div class="card mt-3"  style="width: 18vw;">
                    <div class="single-post post-style-1 d-flex flex-column">
                    <div class="blog-image" style="width: 18vw; height: 18vh; background: url('{{asset("storage/$article->thumbnail")}}'); background-size:cover;">
                        {{-- <img src="{{asset("storage/$article->thumbnail")}}" alt="" style="width:100%; height:auto;"> --}}
                        </div>
                        <div class="blog-info d-flex flex-column">
                            <button class="btn mt-2" type="submit"><h4 id="h4">{{$article->title}}</h4></button>
                            {{-- <p>{!!html_entity_decode(str::limit($article->content,20))!!}</p> --}}
                        </div>
                        <div class="text-center" style="background: #ecf0f1;">
                            <h4><i class="fa fa-comments-o"></i> <small>{{count($article->comments)}}</small></h4>
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