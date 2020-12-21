<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Subscripttype;
use App\User;
use App\Ticket;

class Client extends Model
{

    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'resellerid', 
        'fname', 'lname', 'comname',
        'phone', 'addr1', 'addr2',
        'city', 'province', 'zipcode', 'email',
        'is_disabled'
    ];

    // const PROVINCES = [
    //     'Alberta','British Columbia','Manitoba','New Brunswick','Newfoundland & Labrador','Northwest Territories','Nova Scotia','Nunavut','Ontario','Prince Edward Island','Quebec" selected="selected','Saskatchewan','Yukon'
    // ];

    //... Just Quebec

    const PROVINCES = [
        'Quebec'
    ];
    

    public function reseller(){
        return $this->belongsTo(User::class, 'resellerid');
    }

    public function tickets() {
        return $this->hasMany('App\Ticket', 'clientno', 'id')->get();
    }

    public function getNameAttribute()
    {
        // return Ticket::REQUESTS[$this->request];
        return $this->fname." ".$this->lname;
    }
    
    // public function tickets()
    // {
    //     return $this->morphMany(Ticket::class, 'ticketable');
    // }    
}
