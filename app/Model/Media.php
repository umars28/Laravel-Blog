<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['file_name', 'file_size', 'file_type'];

    public function article() {
        return $this->hasOne(Article::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
