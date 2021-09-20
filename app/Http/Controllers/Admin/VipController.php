<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vip;
use Session;

class VipController extends Controller
{
    public function index(){
        session::put('page','vip');
        $vips = Vip::get();
        return view('admin.vip_index', compact('vips'))->with('no',1);
    }

    public function create(){
        
        // $vips = Vip::get();
        return view('admin.vip_create');
    }

    public function store(Request $request){

        $rules = [
                
                'subcrptn_date'=> 'required',
                'ggl_pdct_id'=> 'required',
            ];
            $customMessages = [
                'subcrptn_date.required' => ' subcrptn_date required',
                'ggl_pdct_id.required' => ' ggl_pdct_id required',
                
        ];
            $this->validate($request, $rules, $customMessages);
        
        $vip = new Vip;
         $vip->subcrptn_date = $request->input('subcrptn_date'); 
         $vip->ggl_pdct_id = $request->input('ggl_pdct_id'); 

        //  dd($vip);
         $vip->save();
        return redirect('admin/vip')->with('message', 'Vip Plan added successfully!');
    }

    public function edit($id){
        $vipEdit = Vip::find($id);
        return view('admin.vip_edit', compact('vipEdit'));
    }

    public function update(Request $request, $id){
        
        $vip = Vip::find($id);
         $vip->subcrptn_date = $request->input('subcrptn_date'); 
         $vip->ggl_pdct_id = $request->input('ggl_pdct_id'); 

        //  dd($vip);
         $vip->update();
        return redirect('admin/vip')->with('message', 'Vip Plan updated successfully!');
    }

    public function destroy($id){
        $data = Vip::find($id);  
        $data->delete();
        return redirect()->back()->with('message', 'Vip has been deleted.');
    }
}
