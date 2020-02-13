@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        <h1>{{$article->title}}</h1>
                        <hr>
                        {!!html_entity_decode($article->content)!!}
                        <p>{{$article->user_id}}</p>
                        <hr>
                    <form action="{{route('articles.create')}}" method="get">
                        <input class="btn btn-success" type="submit" value="Créer article">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection