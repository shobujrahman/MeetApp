<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Advertisement;

class AdvertisementController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            'data'=> Advertisement::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function update(Request $request){

        $advertisement = Advertisement::first();
   
        $advertisement->update($request->all());
        return response()->json([
            'message'=>'Ads updated successfully!',
            'Status'=>200 
        ]);
    }
}
