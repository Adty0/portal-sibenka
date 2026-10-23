<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideshowMedia extends Model
{
    use HasFactory;

    protected $table = 'slideshow_media';

    protected $fillable = [
        'file_path',
        'original_name',
        'is_starred',
        'duration_seconds',
        'caption',
        'order_num',
    ];

    protected $casts = [
        'is_starred' => 'boolean',
        'duration_seconds' => 'float',
        'order_num' => 'integer',
    ];
}

