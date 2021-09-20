<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function index(){
        $feedback=Feedback::orderBy('id', 'DESC')->get();
        return response()->json([
            'status'=> 200,
            'data'=>$feedback
        ]);
    }

    public function store(Request $req){
        $feedback = Feedback::create($req->all());

         return response()->json([
            'status'=> 200,
            'message'=>'new feedback added!'
        ]);
    }
}
