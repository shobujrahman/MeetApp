<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use App\Country;
use DB;
use Session;

class ImageController extends Controller
{
    public function index(){
        session::put('page','image');

         $images = DB::table('images')
        ->leftJoin('countries','images.cntry_id', 'countries.id')
        ->select('images.*', 'countries.country_name')
        ->get();
        return view('admin.image_index', compact('images'))->with('no',1);
    }
    public function create(){
        $countries = DB::table('countries')->get();
        return view('admin.image_create', compact('countries'));
    }
    
    public function store(Request $request){
        $rules = [
                
                'name' => 'required|max:55',
                'image' => 'required|mimes:jpeg,jpg,png,gif,webP,svg|max:10000',
            ];
            $customMessages = [
                
                'name.required' => ' coin required',
                'image.required' => 'must be an image with jpeg,jpg,png,gif,webP,svg'
        ];
            $this->validate($request, $rules, $customMessages);
        
        $image = new Image;
        
        $imageName = time().'.'.$request->image->extension();  
        $path = $request->image->move(public_path('images/only_images/'), $imageName);

        $image->cntry_id = $request->input('country_name');
        $image->name = $request->input('name');
        $image->image = $imageName ;
        
        // dd($image);
        $image->save();

        return redirect()->back()->with('message', 'Image added successfully');
    }

    public function edit($id){
        
        $imageEdit=DB::table('images')->where('id',$id)->first();
        return view('admin.image_edit',compact('imageEdit'));
    }

    public function update(Request $request, $id){
         $image = Image::find($id);

         //get old img
         $old_img = $request->input('old_image');

         $image->cntry_id = $request->input('country_name');
         $image->name = $request->input('name');

         if($request->image){
            $imageName = time().'.'.$request->image->extension();  
            $path = $request->image->move(public_path('images/only_images/'), $imageName);
            $image->image = $imageName ;
            // delete previous image
            $delete = unlink(public_path('images/only_images/') . "$old_img");
         
                
            $image->update();

            return redirect()->back();
            
         }else{
            $image->cntry_id = $request->input('country_name');
            $image->name = $request->input('name');
            $image->update();
            return redirect('admin/image')->with('message', 'Image Updated!');
         }
    }

    public function destroy($id){
        $data = Image::find($id);
        //delete image path
        $image = unlink(public_path('images/only_images/'). $data->image);
        $data->delete();
        return redirect()->back()->with('message', 'Image has been deleted.');
    }
}
