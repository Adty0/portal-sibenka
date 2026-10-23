<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'image_path',
        'drive_url',
        'order_num',
        'is_active',
    ];
}

