<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
       protected $fillable = [
        'cntry_id',
        'comment',     
    ];
}
