<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\SubjectFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSubjectController extends Controller
{
    public function index() {
        $subjects = DB::table('subject_faqs')->paginate(5);
        return view('adminFaq.subjectIndex',compact('subjects'));
    }

    public function save(Request $request) {
        $subjects = new SubjectFaq();
        $subjects->subject = $request->subject;
        $subjects->status = $request->status;
        $subjects->save();
        return redirect(route('admin.subject.index'))->with('message', 'Subject Added');
    }

    public function edit($id) {
        $subjects = SubjectFaq::findOrFail($id);
        return view('adminFaq.subjectEdit', compact('subjects'));
    }

    public function update(Request $request, $id) {
        $subject = SubjectFaq::findOrFail($id);
        $subject->subject = $request->subject;
        $subject->status = $request->status;
        $subject->saveOrFail();
        return redirect(route('admin.subject.index'))->with('message', 'Subject Updated');
    }
}
