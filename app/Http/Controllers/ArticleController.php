<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function show(Article $article)
    {
        return view('articles.show',compact('article'));
    }

    public function praise(Request $request)
    {
        Article::where('id',$request->id)->increment('like');
        return redirect()->route('article',['article' => $request->id]);
    }
}
