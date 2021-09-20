<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use App\VideoType;
use DB;

class VideoController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            'data'=> $videos = DB::table('videos')
        ->leftJoin('countries','videos.cntry_id', 'countries.id')
        ->leftJoin('videotypes','videos.type', 'videotypes.id')
        ->select('videos.*', 'countries.country_name','videotypes.type_name')
        ->orderBy('id', 'DESC')->get()
        ]);


        
    }

    public function show($id)
    {
        $video = Video::where('id',$id)->first();
        if(!$video){
            return response()->json([
                'message'=>'video Not in list',
                'Status'=>204]);
        } else if ($id) {
            return response()->json([
                'success' => true,
                'data' => Video::where('id',$id)->get(),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! video can not be display'
            ], 500);
        }
    }


    public function countrybyid($id)
    {
        $country = Video::where('cntry_id',$id)->get();
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
