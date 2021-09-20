<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
   protected $fillable=[
       'reference',
       'url',
       'banner_image',
   ];
}
