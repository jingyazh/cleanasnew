<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'offsite_cleaning_facility_address',
        'offsite_cleaning_facility_town',
        'offsite_cleaning_facility_tel',
        'offsite_cleaning_facility_email',
        'offices_address',
        'offices_town',
        'offices_tel',
        'offices_email',
        'embed',
        'locale'
    ];
}
