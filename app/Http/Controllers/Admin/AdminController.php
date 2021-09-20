<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Admin;
use Auth;
use DB;
use Session;

class AdminController extends Controller
{
    public function profile(){
        session::put('page','profile');
        $admins = Admin::get();
        return view('admin.admin_profile', compact('admins'));
    }
    public function dashboard(){
        session::put('page','dashboard');
        // //dynamic counts
        $cCount = DB::table('categories')->count();
        $countryCount = DB::table('countries')->count();
        $commentCount = DB::table('comments')->count();
        $giftCount = DB::table('gifts')->count();
        $imageCount = DB::table('images')->count();
        $nameCount = DB::table('names')->count();
        $videoCount = DB::table('videos')->count();
        $adCount = DB::table('advertisements')->count();
        $bannerCount = DB::table('banners')->count();
        $coinCount = DB::table('coins')->count();
        $settingCount = DB::table('settings')->count();
        $vipCount = DB::table('vips')->count();
        $adminCount = DB::table('admins')->count();
        $userCount = DB::table('users')->count();
        $notifiCount = DB::table('notifications')->count();
        
        return view('admin.admin_dashboard',compact(
            'cCount',
            'countryCount', 
            'commentCount',
            'giftCount',
            'imageCount',
            'nameCount',
            'videoCount',
            'adCount',
            'bannerCount',
            'coinCount',
            'settingCount',
            'vipCount',
            'adminCount',
	    'userCount',
            'notifiCount',
        ));
        
    }

    //data insert on database table
    public function login(Request $request){
        $data = [
            'userName' =>'Abdur Rahman',
            'email' =>'admin@admins',
            'full_name' =>'ProRahman',
            'user_role' =>'super_admin',
            'password' =>'admin',
        ];
        // Admin::create($data);
        $admin = Admin::all();

        
        //to signin admin and to go dashboard after post
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data); 

            //validation for admin login
        $rules = [
            'email'=> 'required|email|max:255',
            'password'=>'required',
        ];
        $message = [
            'email.max' => 'Enter a valid email address. ',
            'email.required' => 'Required email. ',
            'password.required' => 'Required a valid password. ',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                return redirect('admin/dashboard');
            }else{
                return redirect()->back()->with('error', 'Invalid Email or Password');
            }
        }    //end of admin loginpost 
        return view('admin.admin_login');
    }

    //logout 
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
