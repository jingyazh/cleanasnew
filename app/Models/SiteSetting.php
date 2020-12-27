<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'home_embed', 
        'home_discounter', 
        'home_esg_image', 
        'comparison_image', 
        'comparison_txt', 
        'clean_slogan', 
        'service_image', 
        'service_txt', 
        'service_list_image', 
        'service_download_checklist', 
        'esg_banner_embed', 
        'footer_txt', 
        'home_meta_title', 
        'home_meta_description', 
        'comparison_meta_title', 
        'comparison_meta_description', 
        'clean_meta_title', 
        'clean_meta_description', 
        'service_meta_title', 
        'service_meta_description', 
        'todos_meta_title', 
        'todos_meta_description', 
        'values_meta_title', 
        'values_meta_description', 
        'faq_meta_title', 
        'faq_meta_description', 
        'testimonials_meta_title', 
        'testimonials_meta_description', 
        'aboutus_meta_title', 
        'aboutus_meta_description', 
        'contact_meta_title', 
        'contact_meta_description', 
        'errorpage404', 
        'errorpage410', 
        'errorpage500', 
        'locale',
    ];
}
