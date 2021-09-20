<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'cntry_id', 
        'v_image',
        'video_url',
        'video_upload',
        
    ];
}
