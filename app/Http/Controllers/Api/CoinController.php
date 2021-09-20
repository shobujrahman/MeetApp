<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coin;

class CoinController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            'data'=> Coin::orderBy('id', 'DESC')->get(),
        ]);
    }
}
