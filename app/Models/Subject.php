<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'desc',
        'quantity',
        'comment',
        'price',
        'teacher_id',
        'image_url',
    ];
}
