<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use App\Country;
use DB;
use Session;

class CommentController extends Controller
{
    public function index(){
        session::put('page','comment');
        // join the tables 
        $comments = DB::table('comments')
        ->leftJoin('countries','comments.cntry_id', 'countries.id')
        ->select('comments.*', 'countries.country_name')
        ->get();
        return view('admin.comment_index', compact('comments'))->with('no',1);
    }

    public function create(){
        $countries = DB::table('countries')->get();
        return view('admin.comment_create', compact('countries'));
    }

    public function store(Request $request){

        $rules = [
                
                'name' => 'required|max:255',
                'comment' => 'required|max:255',
                'country_name'=>'required',
            ];
            $customMessages = [
                
                'name.required' => ' Comment required',
                'comment.required' => ' Comment required',
                'country_name.required' => ' country_name required',
        ];
            $this->validate($request, $rules, $customMessages);

        $comment = new Comment;
        
        $comment->comment = $request->input('comment');
        $comment->cntry_id = $request->input('country_name');
        $comment->name = $request->input('name');
        
        // dd($comment);
        $comment->save();

        return redirect()->back()->with('message', 'Comment added successfully');
    }


    public function edit($id){
        
        $commentEdit=DB::table('comments')->where('id',$id)->first();
       return view('admin.comment_edit',compact('commentEdit'));
    }


    //  public function show($id)
    // {
    //     $comments=DB::table('comments')->where('id',$id)->first();
        
        
    //    return view('admin.comment_show')->with('comm',$comments );
    // }


    public function update(Request $request, $id){
        $comment = Comment::find($id);
        
        $comment->name = $request->input('name');
        $comment->comment = $request->input('comment');
        $comment->cntry_id = $request->input('country_name');
        
        // dd($comment);
        $comment->save();

        return redirect()->back()->with('message', 'Comment updated successfully');
    }

    public function destroy($id){
        $data = Comment::find($id);  
        $data->delete();
        return redirect()->back()->with('message', 'Comment has been deleted.');
    }
}