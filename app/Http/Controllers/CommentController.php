<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request,$id){
       /* dd($id); */
        $comment=new Comment();
        $comment->post_id=$id;
        $comment->user_id=1;
        $comment->comment=$request->comment;
        $comment->save();   
        return redirect()->back();
    }
    public function index($id){
        $comments=Comment::all();
        return view('posts.view',compact('comments'));  
     }
}
