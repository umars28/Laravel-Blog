<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category','status'];

    public function articles() {
        return $this->hasMany(Article::class);
    }
}
