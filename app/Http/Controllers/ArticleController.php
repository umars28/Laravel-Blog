<?php

namespace App\Http\Controllers;

use App\Model\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id) {
        $article = Article::whereId($id)->first();
        return view('article.articleDetail', compact('article'));
    }
}
