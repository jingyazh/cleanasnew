<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'reviewid', 'testimonialid', 'title', 'embed', 'image', 'role', 'type', 'locale'
    ];
}
