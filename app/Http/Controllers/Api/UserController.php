<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;


class UserController extends Controller
{
	public function index(){
        $users =  User::all();
        
        return response()->json([
                    'message'=>'User added successfully!',
                    'Status'=>200,
                    'data'=>$users,
                    
                    
                ]);
    }

    public function store(Request $request)
    {
   
            $user = new User;

            $user->u_name = $request->input('u_name');
            $user->email = $request->input('email');
            $user->gender = $request->input('gender');
            $user->phone = $request->input('phone');
            $user->password = $request->input('password');

 	    $imageName = time().'.'.$request->u_image->extension();  
            $path = $request->u_image->move(public_path('images/user_images/'), $imageName);
            $user->u_image = $imageName;
            
          
            $user->save();
        
        return response()->json([
                    'message'=>'User added successfully!',
                    'Status'=>200 
                ]);
    }
}