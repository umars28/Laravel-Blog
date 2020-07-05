<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Media;
use App\Traits\ImageUpload;
use App\User;
use Illuminate\Http\Request;
use Hash;

class AdminProfilController extends Controller
{
    use ImageUpload;

    public function ShowProfil(){
        $profil = User::first();
        return view('adminProfil.index', compact('profil'));
    }

    public function UpdateProfil(Request $request, $id) {
        $profil = User::findOrFail($id);
        $image = $profil->media;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
            'media_id' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            $this->validate($request,[
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4048'
            ]);
            $image = $this->AdminImageUpload($request->image);
        }
        if (!empty($request->password)) {
            $profil->password = Hash::make($request->password);
        } 

            $profil->name = $request->name;
            $profil->email = $request->email;
            $profil->media_id = $image ? $image->id : null;
        
        $profil->saveOrFail();
        return redirect(route('admin.profil'))->with('message', 'Profil Updated');
    }
}
