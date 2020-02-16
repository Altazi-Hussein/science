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
                <div class="card-header">Rédiger un article</div>

                <div class="card-body">
                    <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="mb-2" for="title">Titre</label>
                        <input class="form-control mb-3" type="text" name="title" id="title">

                        <label class="mb-2"for="thumbnail">Miniature de l'article</label>
                        <input type="file" class="form-control mb-3" id="thumbnail" name="thumbnail">
                        <label class="mb-2" for="content">Votre article</label>
                        <textarea class="form-control mb-3" id="content" name="content">
                        </textarea>

                        <input class="btn btn-success mt-3" type="submit" value="Créer article">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection