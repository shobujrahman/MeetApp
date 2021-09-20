<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return response()->json([
            'success' => true,
            'data' => Category::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function show($id)
                {
                    $category = Category::where('id',$id)->first();
                    if(!$category){
                        return response()->json([
                            'message'=>'category Not Found',
                            'Status'=>204]);
                    } else if ($id) {
                        return response()->json([
                            'success' => true,
                            'data' => Category::where('id',$id)->get(),
                        ]);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Sorry, Category can not display'
                        ], 500);
                    }
                }
}
