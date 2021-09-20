<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            'data'=> Settings::orderBy('id', 'DESC')->get(),
        ]);
    }
}
