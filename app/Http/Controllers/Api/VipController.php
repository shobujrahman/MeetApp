<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vip;

class VipController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            'data'=> Vip::orderBy('id', 'DESC')->get(),
        ]);
    }
}
