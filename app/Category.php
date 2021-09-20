<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        protected $fillable = [
        'cid', 
        'cat_name',
        'cat_image',
    ];
}
