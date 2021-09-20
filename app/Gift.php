<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
        protected $fillable = [
        'cat_id', 
        'coin',
        'gift_image',
    ];
}
