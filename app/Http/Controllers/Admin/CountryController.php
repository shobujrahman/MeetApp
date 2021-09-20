<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use Session;

class CountryController extends Controller
{
    public function index(){
        session::put('page','country');
        $countries = Country::get();
        return view('admin.country_index', compact('countries'))->with('no',1);
    }

    public function create(){
        return view('admin.country_create');
    }

    public function store(Request $request){
        $rules = [
                
                'country_name' => 'required|max:255',
                'country_image' => 'required',
 
            ];
            $customMessages = [
                
                'country_name.required' => ' Name required',
                'country_image.required' => 'Select Image'
        ];
            $this->validate($request, $rules, $customMessages);

        $country = new Country;

        $imageName = time().'.'.$request->country_image->extension();  
        $path = $request->country_image->move(public_path('images/country_images/'), $imageName);

        $country->country_name = $request->input('country_name');
        $country->country_image = $imageName;
        // dd($country);
        $country->save();

        return redirect()->back()->with('message','Country Added');
    }

    public function edit($id){
        $countryData = Country::where('id',$id)->first();
        // dd($countryData);
        return view('admin.country_edit', compact('countryData'));
    }

    public function update(Request $request, $id){
         $country = Country::find($id);

         //get old img
         $old_img = $request->input('old_image');

         $country->country_name = $request->input('country_name');

         if($request->country_image){
            $imageName = time().'.'.$request->country_image->extension();  
            $path = $request->country_image->move(public_path('images/country_images/'), $imageName);
            $country->country_image = $imageName;
            // delete previous image
            $delete = unlink(public_path('images/country_images/') . "$old_img");
         
                
            $country->update();

            return redirect()->back();
            
         }else{
            $country->country_name = $request->input('country_name');
            $country->update();
            return redirect('admin/country')->with('message', 'Country Updated!');
         }
    }

    public function destroy($id){
        $data = Country::find($id);
        //delete image path
        $image = unlink(public_path('images/country_images/'). $data->country_image);
        $data->delete();
        return redirect()->back()->with('message', 'Country has been deleted.');
    }
}
