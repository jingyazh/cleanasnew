<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comparison extends Model
{
    use HasFactory;
    protected $fillable = [
        'compareid', 'title', 'image_landing_1', 'image_landing_2', 'embed', 'image_article', 'locale', 'og_locale', 'og_site_name', 'og_type', 'og_url', 'og_title', 'og_description', 'og_image', 'og_image_width', 'og_image_height'
    ];
}
