<?php

namespace App\Http\Controllers;

use App\Model\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index() {
        $about = DB::table('abouts')->first();
        return view('about.index', compact('about'));
    }
}
