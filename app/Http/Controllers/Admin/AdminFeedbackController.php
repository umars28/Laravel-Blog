<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ContactUs;
use App\Model\Feedbacks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminFeedbackController extends Controller
{
    public function show() {
        $feedbacks = Feedbacks::with('category')->paginate(5);
        return view('adminFeedback.feedbackIndex', compact('feedbacks'));
    }
}
