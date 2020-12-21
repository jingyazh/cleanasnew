<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Codelog extends Model
{
    //
    protected $fillable = [
        'from_rsid', 'to_rsid', 'addcoden', 'acttype'
    ];

    public function send_reseller(){
        return $this->belongsTo(User::class, 'from_rsid');
    }    
    public function receive_reseller(){
        return $this->belongsTo(User::class, 'to_rsid');
    }  
    
}
