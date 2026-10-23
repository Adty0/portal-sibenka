<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'division',
        'role',
        'image_path',
        'drive_url',
        'order_num',
        'is_placeholder',
    ];
}

