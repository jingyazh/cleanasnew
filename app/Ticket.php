<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;
use App\Client;
use App\User;

class Ticket extends Model
{
    //
    protected $fillable = [
        'clientno', 'serviceno', 'transferno', 'transother', 'requestno', 
        'speedno', 'planphoneno', 'iskeepno', 'keep_phoneno', 'keep_fname', 'keep_lname', 'keep_address', 'keep_oldprovider',
        'installdate', 'modemno', 'sn', 'macaddr', 'installon', 'clientvl', 'availtimes', 'status',

        'usernamesip', 'passwd', 'comment', 'oldaddr', 'newaddr',

        'resellerid'
    ];

    public function reseller(){
        return $this->belongsTo(User::class, 'resellerid');
    }

    const SERVICES = [
        0 => 'New Connection', 
        1 => 'Move',
        2 => 'Transfer',
        3 => 'Service Cancel',
        4 => 'Change Speed',
        5 => 'Change Modem',
    ];

    // public function service(){
    //     return Ticket::SERVICES[$this->serviceno];
    // }
    // public function request(){
    //     return Ticket::REQUESTS[$this->requestno];
    // }
    // public function speed(){
    //     return Ticket::SPEEDS[$this->speedno];
    // }
    // public function planphone(){
    //     return Ticket::PLANPHONES[$this->planphoneno];
    // }

    const TRANSFERS = [
        0 => 'Videotron', 
        1 => 'ALTiMA',
        2 => 'ACN',
        3 => 'EBox',
        4 => 'Other'
    ];    

    const REQUESTS = [
        0 => 'Residential', 
        1 => 'Commercial',
    ];

    const SPEEDS = [
        0 => '6 - 1', 
        1 => '11 - 1.5',
        6 => '17 - 11',
        2 => '35 - 11',
        3 => '70 - 11',
        4 => '118 - 36',
        5 => '236 - 36'
    ];     
    
    const PLANPHONES = [
        0 => 'NO', 
        1 => 'CANADA',
        2 => 'CANADA and USA'
    ];
    
    const ISKEEPNOS = [
        0 => 'NO', 
        1 => 'YES',
    ];

    const AVAILTIMES = [
        0 => 'AM (7:30 ~ 12)',
        1 => 'PM (12 ~ 17)',
        2 => 'Evening (17 ~ 20:30)',
        3 => 'All Day (7:30 ~ 20:30)',
    ];

    const MODEMS = [
        0 => 'Motorola', 
        1 => 'Hitron',
        2 => 'Arris'
    ];

    const STATUSES = [
        0 => 'In Progress',
        1 => 'Active',         
        2 => 'Cancelled'
    ];    

    public function client(){
        return $this->belongsTo(Client::class, 'clientno');
    }

    public function getResellerAttribute() {
        return $this->client->reseller->id;
    }

    public function setAvailtimesAttribute($value)
    {
        $this->attributes['availtimes'] = json_encode($value);
    }

    public function getAvailtimesAttribute($value)
    {
        return json_decode($value);
    }    

    public function getServicestrAttribute()
    {
        return Ticket::SERVICES[$this->serviceno];
    }  

    public function getSpeedstrAttribute()
    {
        return Ticket::SPEEDS[$this->speedno];
    }
    public function getPlanphonestrAttribute()
    {
        return Ticket::PLANPHONES[$this->planphoneno];
    }
    public function getStatusstrAttribute()
    {
        return Ticket::STATUSES[$this->status];
    }    
    public function getRequeststrAttribute()
    {
        return Ticket::REQUESTS[$this->request];
    }


    
    // public function ticketable()
    // {
    //     return $this->morphTo();
    // }    
}
