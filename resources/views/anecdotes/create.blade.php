@extends('layouts.app')

@section('head')
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter une anecdote</div>

                <div class="card-body">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <form action="{{route('anecdotes.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="mb-2" for="content">Contenu de l'anecdote</label>   
                        <input type="text" class="form-control mb-3" id="content" name="content" maxlength="300">

                        <label class="mt-3" for="article_id">A quel article fait-elle référence ?</label>   
                        <select id="articles" class="form-control mb-3" name="article_id">
                            <option value="0" selected>Aucun</option>
                            @foreach ($articles as $article)
                                <option value="{{$article->id}}">{{$article->title}} – {{$article->user->name}}</option> 
                            @endforeach
                          </select>
                        <input class="btn btn-success mt-3" type="submit" value="Ajouter l'anecdote">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection