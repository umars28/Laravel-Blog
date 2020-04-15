<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Homepages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomepageController extends Controller
{
    public function index() {
        $homepages = DB::table('homepages')->first();
        return view('adminHomepages.index', compact('homepages'));
    }
}
