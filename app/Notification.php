<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable=[
        'title',
        'message',
        'url',
        'image_url',
    ];
}
