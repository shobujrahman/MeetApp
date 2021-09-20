<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use App\Country;
use App\VideoType;
use DB;
use Session;

class VideoController extends Controller
{
    public function index(){
        session::put('page','video');
        $videos = DB::table('videos')
        ->leftJoin('countries','videos.cntry_id', 'countries.id')
        ->leftJoin('videotypes','videos.type', 'videotypes.id')
        ->select('videos.*', 'countries.country_name','videotypes.type_name')
        ->get();
        return view('admin.video_index', compact('videos'))->with('no',1);
    }

    public function create(){
        $countries = DB::table('countries')->get(); 
        return view('admin.video_create', compact('countries'));
    }

    public function store(Request $request){
    
        
        $video = new Video;

        if(empty($request->video_upload) && empty($request->v_image) && empty($request->video_url)){
            
            return redirect()->back()->with('error', 'please fill up the fields');
        }
        
       if($request->video_url){
           if($request->hasFile('v_image') && $request->video_upload==null){

               $imageName = time().'.'.$request->v_image->extension();  
               $path = $request->v_image->move(public_path('images/video_images/'), $imageName);
               $video->v_image = $imageName;
    
               $video->cntry_id = $request->input('country_name');
                    $video->video_url = $request->input('video_url');
                     $video->type = $request->input('name');
           }else{
                return redirect()->back()->with('error', 'please select thumbnail image or fill the the url field');
            }
           
        }

       else if($request->video_upload){
           if($request->hasFile('video_upload') && $request->hasFile('v_image')){

               $imageName = time().'.'.$request->v_image->extension();  
               $path = $request->v_image->move(public_path('images/video_images/'), $imageName);
               $video->v_image = $imageName;

               $videoName = time().'.'.$request->video_upload->extension();  
                $path = $request->video_upload->move(public_path('images/video_images/videos/'), $videoName);
                
                $video->video_upload = $videoName;
    
               $video->cntry_id = $request->input('country_name');
                $video->type = $request->input('name');
                    
           }else{
                return redirect()->back()->with('error', 'please select thumbnail image or select the video upload');
            }
           
        }

        else{
            if($request->v_image){

                return redirect()->back()->with('error', 'please select thumbnail image or select the video upload or fill up url');
            }
            
        }

        $video->save();

        return redirect()->back()->with('message','Video Added successfully');
    }

    public function edit($id){
        $videoEdit=DB::table('videos')->where('id',$id)->first();
        return view('admin.video_edit', compact('videoEdit'));
    }

    public function update(Request $request, $id){
         $video = Video::find($id);

         //get old img
         
         $old_vdo = $request->input('old_video');
         $old_img = $request->input('old_image');

                $video->cntry_id = $request->input('country_name');
                

                if($request->v_image){
            
                $imageName = time().'.'.$request->v_image->extension();  
                $path = $request->v_image->move(public_path('images/video_images/'), $imageName);
                $video->v_image = $imageName;

            // delete previous image
            $delete = unlink(public_path('images/video_images/') . "$old_img");
         
                
            $video->update();
            
         }
        
         else if($request->type==7){
                 $videoName = time().'.'.$request->video_upload->extension();  
                $path = $request->video_upload->move(public_path('images/video_images/videos/'), $videoName);
                
                $video->video_upload = $videoName;
                 $video->type = $request->input('name');

                $delete = unlink(public_path('images/video_images/videos/') . "$old_vdo");
                $video->update();
         }
                 
        else{
                $video->video_url = $request->input('video_url');
                $video->type = $request->input('name');
                $video->update();
        }
                $video->update();
               return redirect()->back()->with('message', 'video updated');
                    
    }

    public function destroy($id){
        $data = Video::find($id);
           
             $image = public_path('images/video_images/'. $data->v_image);
             $path1 = public_path('images/video_images/videos/'. $data->video_upload);
            if(file_exists($image)){
                @unlink($image);
            }
            if(file_exists($path1)){
                @unlink($path1);
            }
            $data->delete();
        return redirect()->back()->with('message', 'video has been deleted.');
    }
}

