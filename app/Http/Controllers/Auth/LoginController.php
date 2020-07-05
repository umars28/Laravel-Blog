<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $data = Auth::attempt($request->only('email', 'password'));
        if ($data) {
            return redirect(route('admin.dashboard.index'));
        } else {
            session()->flash('message',"$request->email atau $request->password tidak ditemukan");
            return redirect('/login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect(route('login'));
    }
}
