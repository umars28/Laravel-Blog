<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Faqs;
use App\Model\SubjectFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminFaqController extends Controller
{
    public function index() {
        $faqs = Faqs::with('subject')->paginate(5);
        $subjects = SubjectFaq::whereStatus('ACTIVE')->get();
        return view('adminFaq.faqIndex', compact('faqs', 'subjects'));
    }

    public function save(Request $request) {
        $faq = new Faqs();
        $faq->question = $request->question;
        $faq->answer   = $request->answer;
        $faq->subject_faqs_id = $request->subject;
        $faq->save();
        return redirect(route('admin.faq.index'))->with('message', 'Faq Added');
    }

    public function edit($id) {
        $faq = Faqs::findOrFail($id);
        $subjects = SubjectFaq::whereStatus('ACTIVE')->get();
        return view('adminFaq.faqEdit', compact('faq','subjects'));
    }

    public function update(Request $request, $id) {
        $faq = Faqs::findOrFail($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->subject_faqs_id = $request->subject;
        $faq->saveOrFail();
        return redirect(route('admin.faq.index'))->with('message', 'Faq Updated');
    }
}
