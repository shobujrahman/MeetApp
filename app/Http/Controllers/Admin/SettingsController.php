<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;
use Session;

class SettingsController extends Controller
{
    public function index(){
        session::put('page','settings');
        return view('admin.settings')->with('settings',Settings::first());
    }

     //Update advertisement Details
    public function update(Request $request){
        $settings = Settings::first();

        $settings->video_ad_bonus = $request->input('video_ad_bonus');
        $settings->login_bonus = $request->input('login_bonus');
        $settings->refrl_fnd_bonus = $request->input('refrl_fnd_bonus');
        $settings->per_vdo_chrg = $request->input('per_vdo_chrg');
        $settings->set_scnds_ads = $request->input('set_scnds_ads');
        $settings->ggl_play_id = $request->input('ggl_play_id');
        $settings->app_version = $request->input('app_version');
        $settings->app_fcm_key = $request->input('app_fcm_key');
        $settings->privacy_policy = $request->input('privacy_policy');
       

        // dd($settings);
        $settings->update();
        return redirect()->back()->with('message', 'Settings Updated!');
    }
}
