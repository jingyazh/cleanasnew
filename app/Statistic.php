<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Client;
use App\Ticket;
use App\Crequest;
class Statistic extends Model
{
    //    

    
    const ACTION_CREATE_ORDER = 1;
    const ACTION_MODIFY_ORDER = 2; 
    // const ACTION_DELETE_ORDER = 3;

    const ACTION_CREATE_REQ = 4; 
    const ACTION_MODIFY_REQ = 5; 
    // const ACTION_DELETE_REQ = 6; 

    // const ACTION_SUSPEND_CLIENT = 7;
    // const ACTION_ACTIVE_CLIENT = 8;

    const ACTION_NAMES = array(
        // Statistic::ACTION_SUSPEND_CLIENT=>"Disable Customer",
        // Statistic::ACTION_ACTIVE_CLIENT=>"Enable Customer",
        Statistic::ACTION_CREATE_ORDER=>"Add Order",
        Statistic::ACTION_MODIFY_ORDER=>"Modify Order",
        Statistic::ACTION_CREATE_REQ=>"Add Request",
        Statistic::ACTION_MODIFY_REQ=>"Modify Request",
    );

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reseller_id', 'clientno', 'client_name', //...client can be deleted, so keep client name
        'acttype', 'actcontent', 'creqno', 'ticketno'
    ];

    public function reseller(){
        return $this->belongsTo(User::class, 'reseller_id');
    }    
    public function client(){
        return $this->belongsTo(Client::class, 'clientno');
    }      
    public function ticket(){
        return $this->belongsTo(Ticket::class, 'ticketno');
    }   
    public function crequest(){
        return $this->belongsTo(Crequest::class, 'creqno');
    }           

}
