<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use DB;

class ImageController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            'data'=> $images = DB::table('images')
        ->leftJoin('countries','images.cntry_id', 'countries.id')
        ->select('images.*', 'countries.country_name')
        ->get()
        ]);
    }

    public function show($id)
    {
        $image = Image::where('id',$id)->first();
        if(!$image){
            return response()->json([
                'message'=>'image Not Found',
                'Status'=>204]);
        } else if ($id) {
            return response()->json([
                'success' => true,
                'data' => Image::where('id',$id)->get(),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! image can not be display'
            ], 500);
        }
    }

    public function countrybyid($id)
    {
        $country = Image::where('cntry_id',$id)->get();
        if(!$country){
            return response()->json([
                'message'=>'image Not Found',
                'Status'=>204]);
        } else if ($id) {
            return response()->json([
                'success' => true,
                'data' =>  $country,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! image can not be display'
            ], 500);
        }
    }
}