<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gift;

class GiftController extends Controller
{
    public function index(){
        return response()->json([
            'success'=> true,
            'data'=> Gift::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function show($id)
    {
        $gift = Gift::where('id',$id)->first();
        if(!$gift){
            return response()->json([
                'message'=>'Gift Not Found',
                'Status'=>204]);
        } else if ($id) {
            return response()->json([
                'success' => true,
                'data' => Gift::where('id',$id)->get(),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! Gift can not be display'
            ], 500);
        }
    }

    public function catbyid($id)
    {
           
           $category = Gift::where('cat_id',$id)->get();
                    if(!$category){
                        return response()->json([
                            'message'=>'story Not Found',
                            'Status'=>404]);
                    } else if ($id) {
                        return response()->json([
                            'success' => true,
                            'message' => 'ok',
                            'data' => $category,
                        ]);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Sorry, story could not be Shown'
                        ], 500);
                    }

        
    }
    public function emogibytag( $tags)
    {
           
           $tag = Gift::where('tags',$tags)->get();
                    if(!$tag){
                        return response()->json([
                            'message'=>'story Not Found',
                            'Status'=>404]);
                    } else if ($tag) {
                        return response()->json([
                            'success' => true,
                            'message' => 'ok',
                            'data' => $tag,
                        ]);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Sorry, story could not be Shown'
                        ], 500);
                    }

        
    }
}
