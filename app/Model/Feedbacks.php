<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    protected $fillable = ['first_name', 'last_name','category', 'email', 'phone_number', 'message'];

    public function category() {
        return $this->belongsTo(Category::class,'categories_id');
    }
}
