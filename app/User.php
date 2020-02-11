<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','branch_code','level','designation'
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

    public function ticket(){
        return $this->hasMany('App\Ticket','created_by');
    }

    public function category(){
        return $this->hasMany('App\Category','created_by');
    }

    public function comment(){
        return $this->hasMany('App\Comment','created_by');
    }

    public function ticketUpdated(){
        return $this->hasMany('App\Ticket','updated_by');
    }
    
    public function isAdmin(){
        if (auth()->user()->isAdmin)
            return true;
        else
            return false;
    }

}
