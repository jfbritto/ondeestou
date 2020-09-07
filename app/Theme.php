<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
        'color',
        'created_at',
        'updated_at',
    ];
}
