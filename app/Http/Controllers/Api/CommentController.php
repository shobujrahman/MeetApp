<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function index(){
        return response()->json([
            'success' => true,
            'data' => Comment::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function show($id){
        $comment = Comment::where('id',$id)->first();
        if(!$comment){
            return response()->json([
                'message'=>'comment Not Found',
                'Status'=>204
            ]);
        } else if ($id) {
            return response()->json([
                'success' => true,
                'data' => Comment::where('id',$id)->get(),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! comment can not be display'
            ], 500);
        }
    }
    
    public function countrybyid($id)
    {
        $country = Comment::where('cntry_id',$id)->get();
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
