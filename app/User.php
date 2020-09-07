<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'url_name',
        'email',
        'password',
        'avatar',
        'bio',
        'city',
        'phone',
        'id_theme',
        'is_root',
        'is_admin',
        'id_admin',
        'created_at',
        'updated_at',
    ];

}
