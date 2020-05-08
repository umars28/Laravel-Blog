<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Homepages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index(Request $request) {
        $homepage = Homepages::first();
        if ($request->has('cari')) {
        	$cari = $request->cari;
        	$articles = Article::with('media')->where('title', 'like', "%" .$cari. "%")->paginate();
        } else {
            $articles = Article::with('media')->orderBy('id','DESC')->take(7)->paginate(7);
        }
        return view('homepage.index', compact('homepage', 'articles'));
    }
}
