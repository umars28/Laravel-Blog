<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Homepages extends Model
{
    protected $fillable = ['title','description','media_id'];

    public function media() {
        $this->belongsTo(Media::class);
    }
}
