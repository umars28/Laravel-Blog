<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubjectFaq extends Model
{
    protected $fillable = ['subject','status'];

    public function faqs() {
        return $this->hasMany(Faqs::class);
    }
}
