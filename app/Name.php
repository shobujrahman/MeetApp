<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'n_name', 
        'cntry_id',
    ];
}
