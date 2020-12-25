<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatWeClean extends Model
{
    use HasFactory;
    protected $fillable = [
        'cleanid', 'title', 'image', 'type', 'embed', 'locale'
    ];
}
