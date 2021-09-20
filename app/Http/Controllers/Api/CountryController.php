<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    public function index(){
        
        return response()->json([
            'success' => true,
            'data' => Country::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function show($id)
                {
                    $country = Country::where('id',$id)->first();
                    if(!$country){
                        return response()->json([
                            'message'=>'country Not Found',
                            'Status'=>204]);
                    } else if ($id) {
                        return response()->json([
                            'success' => true,
                            'data' => Country::where('id',$id)->get(),
                        ]);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Sorry! Country can not be display'
                        ], 500);
                    }
                }
}
