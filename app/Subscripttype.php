<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscripttype extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'coden', 'duration', 'duration_in'
    ];
}
