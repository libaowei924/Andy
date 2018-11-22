<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    //
    public function index()
    {
        $articles = Article::Limit(10)->orderBy('top','desc')->get();
        return view('root.index',compact('articles'));
    }
}
