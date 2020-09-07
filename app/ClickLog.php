<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClickLog extends Model
{
    protected $fillable = [
        'type_log',
        'id_link',
        'id_user',
        'created_at',
        'updated_at',
    ];
}
