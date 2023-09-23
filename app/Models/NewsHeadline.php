<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsHeadline extends Model
{
    use HasFactory;

    protected $fillable = [
        'headline',
        'photo',
        'intro',
        'body',
        'conclusion'
    ];
}
