<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
use App\Ticket;
use App\Crequest;

class User extends Authenticatable
{
    use Notifiable;

    const ROLE_MASTER = 0;
    const ROLE_SUPER = 1;
    const ROLE_REGULAR = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',  'email', 'password', //... username => fname + lname
        'fname', 'lname', 'parentno', 'roleno', //... roleno:  0=>master, 1=>super, 2=>regular
        'lastip', 'lastlogintime', 'is_disabled'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsernameAttribute()
    {
        return $this->fname." ".$this->lname;
    }   



    public function parentseller(){
        return $this->belongsTo('App\User', 'parentno')->get();
    }

    public function childsellers(){
        return $this->hasMany('App\User', 'parentno', 'id')->get();
    }

    public function myclients(){
        return $this->hasMany('App\Client', 'resellerid', 'id')->get();
    }

    public function myclientscount(){
        return $this->hasMany('App\Client', 'resellerid', 'id')->count();
    }
    public function myclientsactivecount(){
        return $this->hasMany('App\Client', 'resellerid', 'id')->where('is_disabled', 0)->count();
    }

    public function mytickets(){
        return $this->hasMany('App\Ticket', 'resellerid', 'id')->get();
    }
    public function mycrequests(){
        return $this->hasMany('App\Crequest', 'resellerid', 'id')->get();
    }



    public function setPasswordAttribute( $pass ) {    
        $this->attributes['password'] = Hash::make( $pass );    
    }

}
