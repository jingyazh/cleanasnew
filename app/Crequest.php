<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;
use App\User;
use App\Client;

class Crequest extends Model
{
    //
    protected $fillable = [
        'ticketno', 'status', 'ztext', 'masteranswer',
        'resellerid', 'clientno'
    ];

    public function reseller(){
        return $this->belongsTo(User::class, 'resellerid');
    }
    public function client(){
        return $this->belongsTo(Client::class, 'clientno');
    }    

    const STATUSES = [
        0 => 'In Progress',
        // 1 => 'Active',         
        2 => 'Closed'
    ];  

    public function getStatusstrAttribute()
    {
        return Crequest::STATUSES[$this->status];
    }  
    public function ticket(){
        return $this->belongsTo(Ticket::class, 'ticketno');
    }     

}
