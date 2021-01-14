<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'testimonialid', 'title', 'image_1', 'image_2', 'locale', 'meta_title', 'meta_description', 'og_locale', 'og_site_name', 'og_type', 'og_url', 'og_title', 'og_description', 'og_image', 'og_image_width', 'og_image_height'
    ];
}
