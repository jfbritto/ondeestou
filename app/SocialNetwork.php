<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    protected $fillable = [
        'name',
        'avatar',
        'icon',
        'color',
        'created_at',
        'updated_at',
    ];
}
