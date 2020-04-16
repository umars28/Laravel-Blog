<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Homepages;
use App\Model\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomepageController extends Controller
{
    public function index() {
        $homepages = Homepages::first();
        return view('adminHomepages.index', ['homepages' => $homepages]);
    }

    public function update(request $request, $id)
    {
    	$homepages = Homepages::findOrFail($id);
//    	if ($request->hasFile('image')) {
//    	    $image  = $request->file('image');
//                $file_name = $image->getClientOriginalName();
//                $file_type = $image->getClientOriginalExtension();
//                $file_size = $image->getsize();
//                $image_name = $file_name. '' .$file_type;
//                $image->move(storage_path() . '/image/', $image_name);
//
//                $media = Media::create([
//                    'file_name' => $file_name,
//                    'file_type' => $file_type,
//                    'file_size' => $file_size
//                ]);
//            $homepages->media_id = $media ? $media->id : null;
//    	} else {
//            $homepages->media_id = null;
//        }
    	$homepages->title = $request->title;
    	$homepages->description = $request->description;
    	$homepages->save();
    	return redirect(route('admin.homepage.index'))->with('message', 'Homepage Updated');
    }
}
