<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Articletype;

class ArticletypeController extends Controller
{
    //
    public function index(Articletype $type)
    {
        $article = Article::where('class',$type->id)->get();
    }
}
