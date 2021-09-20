<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'video_ad_bonus',
        'login_bonus',
        'refrl_fnd_bonus',
        // 'per_vdo_chrg',
        'set_scnds_ads',
        'ggl_play_id',
        'privacy_policy',
        'app_fcm_key',
        'app_version',
    ];
}
