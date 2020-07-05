<?php

namespace App;

use App\Model\Media;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','media_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function media() {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function CheckImage($image)
    {
        if (!empty($image)) {
           $asset = asset('admin/image/'.$this->media->file_name);
        } else {
           $asset = asset('admin/image/avatar-man.jpg');
        }
        return $asset;
    }
}
