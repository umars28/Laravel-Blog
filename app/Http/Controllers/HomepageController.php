<?php

namespace App\Http\Controllers;

use App\Model\Homepages;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $homepage = Homepages::first();
        return view('homepage.index', compact('homepage'));
    }
}
