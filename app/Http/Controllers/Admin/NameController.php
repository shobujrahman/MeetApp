<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Name;
use App\Country;
use DB;
use Session;

class NameController extends Controller
{
   public function index(){
       session::put('page','name');
        // join the tables 
        $names = DB::table('names')
        ->leftJoin('countries','names.cntry_id', 'countries.id')
        ->select('names.*', 'countries.country_name')
        ->get();
       return view('admin.name_index', compact('names'))->with('no',1);
   }

   public function create(){
       $countries = DB::table('countries')->get();
       return view('admin.name_create', compact('countries'));
   }

   public function store(Request $request){

        $rules = [
                
                'n_name' => 'required|max:55',
                'coin' => 'required',
        ];
        $customMessages = [
                
                'n_name.required' => ' Name required',
                'coin.required' => ' Coin required',
        ];
            $this->validate($request, $rules, $customMessages);

        $name = new Name;
        
        $name->n_name = $request->input('n_name');
        $name->cntry_id = $request->input('country_name');
        $name->coin = $request->input('coin');
        
        // dd($name);
        $name->save();

        return redirect()->back()->with('message', 'Name added successfully');
    }

    public function edit($id){
        $nameEdit=DB::table('names')->where('id',$id)->first();
        return view('admin.name_edit', compact('nameEdit'));
    }

    public function update(Request $request, $id){
        $name = Name::find($id);

        $name->n_name = $request->input('n_name');
        $name->cntry_id = $request->input('country_name');
        $name->coin = $request->input('coin');
        
        $name->update();

        return redirect()->back()->with('message', 'Name updated successfully');
    }

    public function destroy($id){
        $data = Name::find($id);  
        $data->delete();
        return redirect()->back()->with('message', 'Name has been deleted.');
    }
}
