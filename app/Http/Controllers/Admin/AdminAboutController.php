<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function index() {
        $about = About::first();
        return view('adminAbout.index', compact('about'));
    }

    public function update(request $request, $id) {
        About::findOrFail($id)->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description
        ]);
        return redirect(route('admin.about.index'))->with('message', 'About Updated');
    }
}
