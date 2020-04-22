<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    protected $fillable = ['question', 'answer', 'subject_faqs_id'];

    public function subject() {
        return $this->belongsTo(SubjectFaq::class, 'subject_faqs_id');
    }
}
