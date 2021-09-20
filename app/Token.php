<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable=[
        'device_token',
        'device_name',
    ];
}
