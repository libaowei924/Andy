<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Pro;
use Hash;

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

    public function create_show()
    {
        return view('articles.create');
    }

    public function create(Request $request)
    {
        $pro = Pro::find(1);
        $boole = Hash::check($request->pw,$pro->pw);
        if($boole)
        {
            Article::create([
                'name' => $request->name,
                'describe' => $request->describe,
                'content' => $request->content,
                'image' => $request->image,
                'class' => $request->class,
            ]);
        }
        else
        {
            return '创建失败！';
        }
    }
}
