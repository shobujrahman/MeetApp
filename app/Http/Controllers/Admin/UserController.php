<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Session;

class UserController extends Controller
{
    public function index(){
        session::put('page','user');
        $users = User::all();
        return view('admin.user_index', compact('users'))->with('no',1);
    }

    public function create(){
        return view('admin.user_create');
    }

    public function store(Request $request)
    {
   

       $rules = [
                
               'password' => [

                    'required',

                    'string',

                    'min:6',

                'max:12',             // must be at least 8 characters in length

                ],

            'confirm_password' => 'required|same:password|min:6'

                
            ];
               
            $this->validate($request, $rules);
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

            return redirect()->back()->with('message', 'Registered Successfully!!');
    }


    public function edit($id){
        $userEdit=DB::table('users')->where('id',$id)->first();
        return view('admin.user_edit', compact('userEdit'));
    }

    

    public function update(Request $request, $id){
                 $user = User::find($id);
         
         //get old img
         $old_img = $request->input('old_image');
         
         if($request->u_image){
             $imageName = time().'.'.$request->u_image->extension();  
            $path = $request->u_image->move(public_path('images/user_images/'), $imageName);
            $user->u_image = $imageName;

            // delete previous image
            $delete = unlink(public_path('images/user_images/') . "$old_img");
            $user->update();
         }elseif($request->password){
             $user->password = $request->input('password');
             $user->update();
         }
         else{

             $user->u_name = $request->input('u_name');
             $user->gender = $request->input('gender');
             $user->phone = $request->input('phone');
             
             $user->update();
         }
            
            
            

            $user->update();
          

        

            return redirect()->back();
            
         
    }
    
    public function updateStatus( $id){
        $user = DB::table('users')
        ->select('status')
        ->where('id', '=', $id)
        ->first();

        //check user Status
        if($user->status=='1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update user status
        $values = array('status'=>$status);
        DB::table('users')->where('id',$id)->update($values);
        return redirect('admin/user')->with('message','updated status');
    }


    public function destroy($id){
        $data = User::find($id);
        //delete image path
        $image = unlink(public_path('images/user_images/'). $data->u_image);
        $data->delete();
        return redirect()->back()->with('message', 'user has been deleted.');
    }
}