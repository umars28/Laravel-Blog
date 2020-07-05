<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoriesController extends Controller
{
    public function index() {
        $categories = DB::table('categories')->orderBy('id','DESC')->paginate(5);
//        $categories = DB::table('categories')->take(3)->get();
        return view('adminArticle.categories', ['categories' => $categories]);
    }
    public function create() {
        return view('adminArticle.createCategories');
    }

    public function save(request $request) {
        $this->validate($request, [
            'category' => 'required'
        ]);
        $category = new Category();
        $category->category = $request->category;
        $category->status = $request->status;
        $category->save();
        return redirect(route('admin.categories.index'))->with('message', 'Category Added');
    }

    public function edit($id) {
        $categories = Category::findOrFail($id);
        return view('adminArticle.categoriesEdit', compact('categories'));
    }
    public function update(request $request, $id) {
        $category = Category::findOrFail($id)->update([
            'category' => $request->category,
            'status'   => $request->status
        ]);
        return redirect(route('admin.categories.index'))->with('message', 'Category Updated');
    }
}
