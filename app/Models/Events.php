<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Events
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'desc',
        'startDate',
        'endDate',
        'price',
        'place',
        'company',
        'city',
        'image_url',
    ];
}
