<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Userprofile;

class UserprofileController extends Controller
{
    public function index(){
        $profile = Userprofile::all(); 
        return response()->json([
            'status'=>200,
            'data'=>$profile
        ]);
    }

    public function store(Request $request){
         $profile = Userprofile::create($request->all());

         return response()->json([
            'status'=> 200,
            'message'=>'new profile added!'
        ]);
    }

    public function update(Request $request, $id){
        
           $profile = Userprofile::where('id',$id)->first();
            
           if( $profile){

               $profile->user_coin= $request->input('user_coin');
                   
               $profile->update();
               return response()->json([
                        'status'=> 200,
                        'message'=>'profile updated!'
                    ]);
           }else{
               return response()->json([
               'status'=> 200,
               'message'=>'profile can not be updated!'
            ]);
           }
    }

    public function userbyemail( $user_email)
    {
        $profile = Userprofile::where('user_email',$user_email)->get();

        if(!$profile){
            return response()->json([
                'message'=>'email Not in listed',
                'Status'=>204]);
        } else if ($user_email) {
            return response()->json([
                'success' => true,
                'data' => $profile,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! Name can not be display'
            ], 500);
        }
    }
}
