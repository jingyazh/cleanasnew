<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'home_embed', 'home_discounter', 'home_esg_image', 'comparison_image', 'comparison_txt', 'clean_slogan', 'service_image', 'service_txt', 'service_list_image', 'service_download_checklist', 'esg_banner_embed', 'footer_txt', 'locale',
    ];
}
