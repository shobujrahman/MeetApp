<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
    public function index(){
        session::put('page','index');
        $categories = Category::get();
        return view('admin.category_index',compact('categories'))->with('no',1);
    }

    public function create(){
        return view('admin.category_create');
    }

    public function store(Request $request){
          $rules = [
                
                'cat_name' => 'required|max:255',
                'cat_image' => 'required',
 
            ];
            $customMessages = [
                
                'cat_name.required' => ' Name required',
                'cat_image.required' => 'Select Image'
            ];
            $this->validate($request, $rules, $customMessages);

        $category = new Category;

        $imageName = time().'.'.$request->cat_image->extension();  
        $path = $request->cat_image->move(public_path('images/category_images/'), $imageName);

        
        $category->cat_name = $request->input('cat_name');
        $category->cat_image = $imageName;
        // dd($category);
        $category->save();
        return redirect()->back()->with('message','Category Added');
            
    }

    public function edit($id){
        $categoryData = Category::where('id',$id)->first();
        // dd($categoryData);
        return view('admin.category_edit', compact('categoryData'));
    }

    public function update(Request $request, $id){
                 $category = Category::find($id);
         
         //get old img
         $old_img = $request->input('old_image');
         
         $category->cat_name = $request->input('cat_name');
          

         if($request->cat_image){
            $imageName = time().'.'.$request->cat_image->extension();  
            $path = $request->cat_image->move(public_path('images/category_images/'), $imageName);
            $category->cat_image = $imageName;
            // delete previous image
            $delete = unlink(public_path('images/category_images/') . "$old_img");
         
                
            $category->update();

            return redirect()->back();
            
         }else{
            $category->cat_name = $request->input('cat_name');
            
            $category->update();
            return redirect('admin/category')->with('message', 'Category Updated!');
         }
    }

    public function destroy($id){
        $data = Category::find($id);
        $image = unlink(public_path('images/category_images/'). $data->cat_image);
        // return response()->json($image);
        $data->delete();
        return redirect()->back()->with('message', 'Category has been deleted.');
    }
}
