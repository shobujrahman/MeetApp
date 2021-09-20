<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use Session;

class BannerController extends Controller
{
    public function index(){
        session::put('page','banner');
        $banners = Banner::get();
        return view('admin.banner_index', compact('banners'))->with('no',1);
    }

    public function create(){
        return view('admin.banner_create');
    }

    public function store(Request $request){
          $rules = [
                
                'reference' => 'required|max:255',
                'url' => 'required',
                'banner_image' => 'required|mimes:jpeg,jpg,png,gif,webp,svg|max:10000',
 
            ];
            $customMessages = [
                
                'reference.required' => ' Reference required',
                'url.required' => ' Url required',
                'banner_image.required' => 'Must be an image with jpeg,jpg,png,gif,webp required'
            ];
            $this->validate($request, $rules, $customMessages);

        $banner = new Banner;

        $imageName = time().'.'.$request->banner_image->extension();  
        $path = $request->banner_image->move(public_path('images/banner_images/'), $imageName);

        $banner->reference = $request->input('reference');
        $banner->url = $request->input('url');
        $banner->banner_image = $imageName;
        // dd($banner);
        $banner->save();
        return redirect()->back()->with('message','Banner Added');
            
    }

    public function edit($id){
        $bannerEdit = Banner::find($id);
        return view('admin.banner_edit', compact('bannerEdit'));
    }

    public function update(Request $request, $id){
        $banner = Banner::find($id);
         
         //get old img
        $old_img = $request->input('old_image');
         
        $banner->reference = $request->input('reference');
        $banner->url = $request->input('url');

         if($request->banner_image){
           $imageName = time().'.'.$request->banner_image->extension();  
            $path = $request->banner_image->move(public_path('images/banner_images/'), $imageName);
            $banner->banner_image = $imageName;
            // delete previous image
            $delete = unlink(public_path('images/banner_images/') . "$old_img");
         
                
            $banner->update();

            return redirect()->back();
            
         }else{
              $banner->reference = $request->input('reference');
              $banner->url = $request->input('url');
              $banner->update();
            return redirect('admin/banner')->with('message', 'Banner Updated!');
         }
    }

    public function destroy($id){
        $data = Banner::find($id);
        $image = unlink(public_path('images/banner_images/'). $data->banner_image);
        // return response()->json($image);
        $data->delete();
        return redirect()->back()->with('message', 'Banner has been deleted.');
    }
}
