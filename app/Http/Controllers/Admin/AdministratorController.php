<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Session;
use Auth;

class AdministratorController extends Controller
{
    public function index(){
        session::put('page','administrator');
        $admins = Admin::get();
        return view('admin.administrator_index', compact('admins'))->with('no',1);
    }

    public function create(){
        return view('admin.administrator_create');
    }

    //Submit function
    public function store(Request $request)
    {
        $rules = [
                
                'userName' => 'required|max:55',
                // 'email' => 'required',
                'full_name' => 'required|max:55',
                'password' => 'required',
                
        ];
        
            $this->validate($request, $rules);
            
            $admin = new Admin;
        
            $admin->userName = $request->input('userName');
            $admin->email = $request->input('email');
            $admin->full_name = $request->input('full_name');
            $admin->password = $request->input('password');
            
            // dd($admin);
            $admin->save();
            return redirect('admin/administrator')->with('message', 'Admin added successfully!');
    }

    public function edit($id)
    {
        $admindata = Admin::find($id);
        
       return view('admin.administrator_edit',compact('admindata'));
    }

    public function update(Request $request, $id)
    {

        //check if new and confirm password is matching or not
            if($request['password']==$request['confirm_password']){
                Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($request['password'])]);
                 return redirect()->back()->with('message','Admin has been updated successfully!');
            }else{
                    return redirect()->back()->with('error','new and confirm password not match!');
            }

            $admin->userName = $request->input('userName');
            $admin->email = $request->input('email');
            $admin->password = $request->input('password');
            $admin->full_name = $request->input('full_name');
            
            
            $admin->update();
           
            return redirect('admin/administrator/update')->with('message', 'Admin updated successfully!');
    }

     public function destroy(Admin $admin, $id){
        Admin::destroy(array('id',$id));
        return redirect()->back()->with('message', 'SubAdmin has been deleted.');
    }

}
