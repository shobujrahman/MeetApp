<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Name;

class NameController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            'data'=> Name::orderBy('id', 'DESC')->get(),
        ]);
    }
    
    public function show($id)
    {
        $name = Name::where('id',$id)->first();
        if(!$name){
            return response()->json([
                'message'=>'Name Not in list',
                'Status'=>204]);
        } else if ($id) {
            return response()->json([
                'success' => true,
                'data' => Name::where('id',$id)->get(),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! Name can not be display'
            ], 500);
        }
    }

    public function countrybyid($id)
    {
        $country = Name::where('cntry_id',$id)->get();
        if(!$country){
            return response()->json([
                'message'=>'Name Not in list',
                'Status'=>204]);
        } else if ($id) {
            return response()->json([
                'success' => true,
                'data' => $country,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! Name can not be display'
            ], 500);
        }
    }
}
