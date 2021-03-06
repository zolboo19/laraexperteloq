<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $article = new Article();
        // $article->title = $request->title;
        // $article->article_text = $request->article_text;
        //$article->save();

        //magic method
        //firstOrCreate and createOrUpdate

        //Article::create($request->all());

        // $article = Article::where('title', $request->title)->first();

        // if(!$article){
        //     $article=Article::create([
        //         'title' => $request->title,
        //         'article_text' => $request->article_text
        //     ]);
        // }

        //$article = Article::firstOrCreate(['title' => $request->title], ['article_text' => $request->article_text]);
        

        //update or create
        //задгай код ашиглавал

        // $article = Article::where('title', $request->title)->where('user_id', auth()->id()->first());

        // if($article){
        //     $article->update(['article_text' => $request->article_text]);
        // }else{
        //     $article = Article::create([
        //         'title' => $request->title,
        //         'article_text' => $request->article_text,
        //         'user_id' => auth()->id(),
        //     ]);
        // }
        
        Article::updateOrCreate(['title' => $request->title, 'user_id' => auth()->id()], ['title' =>$request->title, 'article_text' => $request->article_text]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
