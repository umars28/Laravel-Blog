<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Homepages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index() {
        $homepage = Homepages::first();
        $articles = Article::with('media')->orderBy('id','DESC')->get();
        return view('homepage.index', compact('homepage', 'articles'));
    }
}
