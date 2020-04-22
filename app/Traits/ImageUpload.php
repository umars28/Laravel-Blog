<?php

namespace App\Traits;

use App\Model\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

Trait ImageUpload {
    public function AdminImageUpload($file) {
        $image_name = $file->getClientOriginalName();
        $extention = strtolower($file->getClientOriginalExtension());
        $image_size = $file->getsize();
        $upload_path = 'admin/image/';
        $image_url = $upload_path.$image_name;
        $success = $file->move($upload_path,$image_name);
        $image = Media::create([
            'file_name' => $image_name,
            'file_size' => $image_size,
            'file_type' => $extention
        ]);
        return $image;
    }
}
