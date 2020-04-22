<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ContactUs;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index() {
        $contacts = ContactUs::first();
        return view('adminContact.contactIndex', compact('contacts'));
    }
    public function update(Request $request, $id) {
        $contacts = ContactUs::findOrFail($id);
        $contacts->first_name = $request->first_name;
        $contacts->last_name = $request->last_name;
        $contacts->contact_number = $request->contact_number;
        $contacts->facebook = $request->facebook;
        $contacts->twitter = $request->twitter;
        $contacts->github = $request->github;
        $contacts->saveOrFail();
        return redirect(route('admin.contact.index'))->with('message', 'Contact Us Updated !');
    }
}
