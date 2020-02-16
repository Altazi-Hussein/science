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
                <div class="card-header">Modifier l'article</div>

                <div class="card-body">
                    <form action="{{route('articles.update', [$article])}}" enctype="multipart/form-data">
                        @csrf
                        <label class="mb-2" for="title">Titre</label>
                        <input class="form-control mb-3" type="text" name="title" id="title" value="{{$article->title}}">

                        <label class="mb-2"for="thumbnail">Miniature de l'article</label>
                        <input type="file" class="form-control mb-3" id="thumbnail" name="thumbnail">

                        <label class="mb-2" for="content">Votre article</label>
                        <textarea class="form-control mb-3" id="content" name="content">
                            {{$article->content}}
                        </textarea>

                        <button class="btn btn-warning mt-3" type="submit">Modifier l'article</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection