<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class News
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'desc',
        'content',
        'time',
        'comment',
        'views',
        'user_id',
        'image_url',
    ];
}
