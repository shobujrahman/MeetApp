<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Token;

class DeviceController extends Controller
{

    public function index(){
        $device = Token::all();
        return response()->json([
            'status'=>200,
            'data'=>$device
        ]);
    }

    public function StoreToken(Request $request){
        $validator = Validator::make($request->all(),[
            'device_token'=>'required',
            'device_name'=>'required',
        ]);

        if ($validator->fails()){
            return response()->json(['message'=>'require all the details'], 404);
        }

        $saved = Token::create($request->all());
        if($saved){
            return response()->json(['message'=>'Token Saved Successfully'], 200);
        }else{
            return response()->json(['message'=>'Token could not be saved'], 404);
        }
    }


	public function update(Request $request, $id){
        
            $device = Token::where('id',$id)->first();
        
              if($device){

               $device->device_token = $request->input('device_token');
                   
               $device->save();
               
               return response()
               ->json([
                        'status'=> 200,
                        'message'=>'profile updated!'
                    ]);
           }else{
               return response()->json([
               
               'message'=>'profile not foun!'
            ]);
           }   
    }

    

    public function devicebyname($device_name){
        $device = Token::where('device_name',$device_name)->get();

        if(!$device){
            return response()->json([
                'message'=>'Token Not in list',
                'Status'=>204]);
        } else if ($device) {
            return response()->json([
                'success' => true,
                'data' => $device,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Sorry! Device Name can not be display'
            ], 500);
        }

    }
}
