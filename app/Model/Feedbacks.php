<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'message'];
}
