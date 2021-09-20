<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gift;
use App\Category;
use DB;
use Session;

class GiftController extends Controller
{
    public function index(){
        session::put('page','gift');

        $gifts = DB::table('gifts')
        ->leftJoin('categories','gifts.cat_id', 'categories.id')
        ->select('gifts.*', 'categories.cat_name')
        ->get();

        return view('admin.gift_index', compact('gifts'))->with('no',1);
    }

    public function create(){
        $categories = DB::table('categories')->get();
        return view('admin.gift_create', compact('categories'));
    }

    public function store(Request $request){
        $rules = [
                
                'coin' => 'required',
                'gift_image' => 'required',
                
            ];
            $customMessages = [
                
                'coin.required' => ' coin required',
                'gift_image.required' => ' Image required',
                
        ];
            $this->validate($request, $rules, $customMessages);
        
        $gift = new Gift;
        
        $imageName = time().'.'.$request->gift_image->extension();  
        $path = $request->gift_image->move(public_path('images/gift_images/'), $imageName);

        $gift->cat_id = $request->input('cat_name');
        $gift->coin = $request->input('coin');
        $gift->tags = $request->input('tags');
        $gift->gift_image = $imageName ;
        
        // dd($gift);
        $gift->save();

        return redirect()->back()->with('message', 'Gift added successfully');
    }

    public function edit($id){
        
        $giftEdit=DB::table('gifts')->where('id',$id)->first();
        return view('admin.gift_edit',compact('giftEdit'));
    }

    public function update(Request $request, $id){
        $gift = Gift::find($id);

        //get old img
            $old_img = $request->input('old_image');

            $gift->cat_id = $request->input('cat_name');
            $gift->coin = $request->input('coin');
            $gift->tags = $request->input('tags');

         if($request->gift_image){
            $imageName = time().'.'.$request->gift_image->extension();  
            $path = $request->gift_image->move(public_path('images/gift_images/'), $imageName);
            $gift->gift_image = $imageName ;
            // delete previous image
            $delete = unlink(public_path('images/gift_images/'). "$old_img");
         
                
            $gift->update();

            return redirect()->back();
            
         }else{
            $gift->cat_id = $request->input('cat_name');
            $gift->coin = $request->input('coin');
            $gift->tags = $request->input('tags');
            $gift->update();
            return redirect('admin/gift')->with('message', 'Gift Updated!');
         }
    }

    public function destroy($id){
        $data = Gift::find($id);
        //delete image path
        $image = unlink(public_path('images/gift_images/'). $data->gift_image);
        $data->delete();
        return redirect()->back()->with('message', 'Gift has been deleted.');
    }
}
