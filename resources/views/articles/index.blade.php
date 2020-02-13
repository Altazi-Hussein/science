@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($articles as $article)
                        <p>{{$article->title}}</p>
                        {!!html_entity_decode($article->content)!!}
                        <p>{{$article->user_id}}</p>
                        <hr>
                    @endforeach
                    <form action="{{route('articles.create')}}" method="get">
                        <input class="btn btn-success" type="submit" value="Créer article">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection