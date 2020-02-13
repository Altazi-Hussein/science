<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }

    public function accueil()
    {
        return view('welcome', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageArticle =  $request->file('thumbnail')->store('upload');
        echo $imageArticle;
        $article = Article::create($request->except(['_token']) + ['user_id' => Auth::user()->id]/*  + ['thumbnail' => $imageArticle] */);
        $article->thumbnail = $imageArticle;
        $article->save();
        return redirect()->route('articles.accueil');
       //Article::create(['user_id' => Auth::user()->id] + $request->except(['_token']));
        /*$article = new Article;
        $article->title = $request->title;
        $article->contenu = $request->content;
        $article->user_id = Auth::user()->id;
        $article->save();
        $article->save($request->title,$request->content, Auth::user()->id);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('articles.show', ['article' => Article::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
