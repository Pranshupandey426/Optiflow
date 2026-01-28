<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'video_path',
        'cta_text',
        'cta_link',
        'is_active'
    ];
}

