<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Tymon\JWTAuth\Contracts\JWTSubject;


class Admin extends Authenticatable 
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'userName', 'email', 'password','full_name','user_role', 
    ];

    protected $hidden = [
        'password','remember_token',
    ];


    

    //to bcrypt password
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

    //to modify Username 
    public function getUserNameAttribute($userName){
        return ucfirst($userName);
    }
    
    
}
