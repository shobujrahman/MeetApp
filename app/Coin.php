<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable=[
        'coin',
        'value',
        'pdct_id_ggl',
    ];
}
