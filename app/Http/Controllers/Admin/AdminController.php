<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Faqs;
use App\Model\Feedbacks;
use App\User;

class AdminController extends Controller
{
    public function index () {
    	$data['count']['articles'] = Article::count();
        $data['count']['faqs'] = Faqs::count();
        $data['count']['feedbacks'] = Feedbacks::count();
        $profil = User::first();
        return view('admin.index', $data, compact('profil'));
    }
}
