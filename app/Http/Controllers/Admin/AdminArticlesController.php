<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Model\Category;
use App\Model\Media;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminArticlesController extends Controller
{
    use ImageUpload;
    public function index() {
        $articles = Article::with('category')->select('id','title', 'sub_title', 'categories_id')->orderBy('id', 'DESC' )->paginate(5);
        $categories = Category::whereStatus('ACTIVE')->get();
        return view('adminArticle.articleIndex',compact('articles', 'categories'));
    }

    public function save(Request $request) {
        $image = new Media();
        if ($request->hasFile('image')) {
            $this->validate($request,[
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4048'
            ]);
            $image = $this->AdminImageUpload($request->image);
        }
        $article = new Article();
        $article->title         = $request->title;
        $article->sub_title     = $request->sub_title;
        $article->description   = $request->description;
        $article->categories_id = $request->category;
        $article->media_id      = $image ? $image->id : null;
        $article->save();
        return redirect(route('admin.articles.index'))->with('message', 'Article Has Been Added');

    }

    public function edit($id) {
        $articles = Article::findOrFail($id);
        $categories = Category::whereStatus('ACTIVE')->get();
        return view('adminArticle.articleEdit', compact('articles', 'categories'));
    }

    public function update(Request $request, $id) {
        $article = Article::findOrFail($id);
        $image = $article->media;
        if ( $request->hasFile('image')) {
            $this->validate($request,[
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4048'
            ]);
            $image = $this->AdminImageUpload($request->image);
        }

        $article->title = $request->title;
        $article->sub_title = $request->sub_title;
        $article->description = $request->description;
        $article->categories_id = $request->category;
        $article->media_id = $image ? $image->id : null;
        $article->saveOrFail();
        return redirect(route('admin.articles.index'))->with('message', 'Article Updated');


    }
}
