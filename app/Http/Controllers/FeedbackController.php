<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Feedbacks;
use App\Rules\Capctha;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index() {
        $categories = Category::whereStatus('ACTIVE')->get();
        return view('feedback.index',compact('categories'));
    }

    public function save(Request $request) {
        $this->validate($request, [
            'first_name'            => 'required|min:2|max:30|string',
            'last_name'             => 'required|min:2|max:30|string',
            'category'               => 'required',
            'email'                 => 'required|email',
            'phone_number'          => 'required|numeric',
            'message'               => 'required',
            'g-recaptcha-response' => new Capctha(),
        ]);

        $feedback = new Feedbacks();
        $feedback->first_name        = $request->first_name;
        $feedback->last_name         = $request->last_name;
        $feedback->categories_id     = $request->category;
        $feedback->email             = $request->email;
        $feedback->phone_number      = $request->phone_number;
        $feedback->description       = $request->message;
        $feedback->save();
        return redirect(route('feedback.index'))->with('message', 'Success');
    }
}
