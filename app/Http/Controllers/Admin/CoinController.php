<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coin;
use Session;

class CoinController extends Controller
{
    public function index(){
        session::put('page','coin');
        $coins = Coin::get();
        return view('admin.coin_index', compact('coins'))->with('no',1);
    }

    public function create(){
        return view('admin.coin_create');
    }

    public function edit($id){
        $coinEdit = Coin::find($id);
        return view('admin.coin_edit',compact('coinEdit'));
    }

    public function store(Request $request){
       $rules = [
                
                'coin'=> 'required',
                'value'=> 'required',
                'pdct_id_ggl'=> 'required',
            ];
            $customMessages = [
                'coin.required' => ' coin required',
                'value.required' => ' value required',
                'pdct_id_ggl.required' => ' pdct_id_ggl required',
                
        ];
            $this->validate($request, $rules, $customMessages);
        
        $coin = new Coin;
         $coin->coin = $request->input('coin'); 
         $coin->value = $request->input('value'); 
         $coin->pdct_id_ggl = $request->input('pdct_id_ggl'); 

        //  dd($coin);
         $coin->save();
        return redirect('admin/coin')->with('message', 'Coin Plan added successfully!');

    }

     //Update advertisement Details
    public function update(Request $request,$id){
        $coin = Coin::find($id);

        $coin->coin = $request->input('coin');
        $coin->value = $request->input('value');
        $coin->pdct_id_ggl = $request->input('pdct_id_ggl');
       

        // dd($coin);
        $coin->update();
        return redirect()->back()->with('message', 'Coins Updated!');
    }

    public function destroy($id){
        $data = Coin::find($id);  
        $data->delete();
        return redirect()->back()->with('message', 'Coin has been deleted.');
    }
}
