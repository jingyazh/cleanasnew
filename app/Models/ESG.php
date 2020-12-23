<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESG extends Model
{
    use HasFactory;
    protected $fillable = [
        'esgid', 'title', 'embed', 'locale'
    ];
}
