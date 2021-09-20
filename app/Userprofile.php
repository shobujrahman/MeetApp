<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model
{
    protected $fillable= [
        'user_name',
        'user_email',
        'user_coin'
    ];
}
