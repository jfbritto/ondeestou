<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'id_user',
        'id_social_network',
        'name',
        'link',
        'phone',
        'msg',
        'status',
        'order_link',
        'created_at',
        'updated_at',
    ];
}
