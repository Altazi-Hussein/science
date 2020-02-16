@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Dashboard</div> --}}
                <div class="card-body">
                        <h1>{{$article->title}}</h1>
                        <p>
                        @if ($article->updated_at > $article->created_at)
                            Article modifié le {{$article->updated_at}}.
                            @else
                            Article publié le {{$article->created_at}}.
                        @endif
                        <br>Rédigé par {{$article->user->name}}.</p>
                        <hr>
                        {!!html_entity_decode($article->content)!!} 
                        <hr>
                        @if (Auth::check() && Auth::user()->id == $article->user->id)
                            <form action="{{ route('articles.edit', [$article]) }}" method="get">
                                <button type="submit" class="btn btn-info btn-sm float-right">Éditer l'article</button>
                            </form>
                        @endif
                </div>
            </div>
            @if (Auth::check())
            <div class="card mt-3">
            <div class="card-body">
            <form action="{{route('comments.store')}}" method="post">
            @csrf
                {{-- <label for="title">Titre du commentaire</label>
                <input type="text" name="title" class="form-control form-control-sm mb-2"> --}}

                <label for="comment">Écrire un commentaire:</label>
                <textarea class="form-control" name="content" id="comment"></textarea>

                <input type="hidden" name="article_id" value="{{$article->id}}">
                <input class="btn btn-primary btn-sm mt-2 float-right" type="submit" value="Publier">
            </form>
            </div>
            </div>
            @else
                <div class="card mt-2">
                    <div class="card-body">
                        <a href="{{route('login')}}">Connectez-vous</a>
                        ou
                        <a href="{{route('register')}}">inscrivez-vous</a>
                        pour poster un commentaire.
                    </div>
                </div>
            @endif
            @foreach ($comments as $comment)
            <div class="card mt-2">
                <div class="card-body">
                {{-- <h5>{{$comment->title}}</h5> --}}
                <p><strong>{{$comment->user->name}}</strong> <small class="float-right">Le {{$comment->created_at}}</small></p>
                <p>{{$comment->content}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection