<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemFeature extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'description',
        'order_num',
    ];
}

