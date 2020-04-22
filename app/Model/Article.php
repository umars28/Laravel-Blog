<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','sub_title','description','categories_id','media_id'];

    public function category() {
       return $this->belongsTo(Category::class, 'categories_id');
    }
    public function media() {
        return $this->belongsTo(Media::class, 'media_id');
    }
}
