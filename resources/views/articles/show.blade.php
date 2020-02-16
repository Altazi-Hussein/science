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
                            Article modifié le {{$article->updated_at}}
                            @else
                            Article publié le {{$article->created_at}}
                        @endif
                        <br>Rédigé par {{$article->user->name}}</p>
                        <hr>
                        {!!html_entity_decode($article->content)!!}
                        
                        <hr>
                    <form action="{{route('articles.create')}}" method="get">
                        <input class="btn btn-success" type="submit" value="Créer article">
                    </form>
                </div>
            </div>
            <div class="card mt-3">
            <div class="card-body">
            <form action="{{route('comments.store')}}" method="post">
            @csrf
                <label for="title">Titre du commentaire</label>
                <input type="text" class="form-control form-control-sm mb-2">

                <label for="comment">Écrire un commentaire</label>
                <textarea class="form-control" name="content" id="comment"></textarea>

                <input type="hidden" name="article_id" value="{{$article->id}}">
                <input class="btn btn-primary btn-sm mt-2 float-right" type="submit" value="Publier">
            </form>
            </div>
            </div>
            @foreach ($comments as $comment)
            <div class="card mt-2">
                <div class="card-body">
                <p class="form-control">{{$comment->content}}</p>
                <p> Ajouté par {{$comment->user->name}} le {{$comment->created_at}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection