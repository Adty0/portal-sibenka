<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    protected $fillable = [
        'app_title',
        'badge_text',
        'page_title',
        'page_subtitle',
        'menu_subtitle',
        'website_url',
        'about_system',
        'urgency_text',
        'auto_return_seconds',
    ];
}
