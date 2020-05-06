<?php

namespace App\Http\Controllers;

use App\Model\Faqs;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function index() {
        $faqs = Faqs::with('subject')->get();
        return view('faq.index', compact('faqs'));
    }
}
