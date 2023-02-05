<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $allposts=Post::paginate(4);
        //dd($allposts);
        return view('posts.index',[
            'posts'=>$allposts
        ]);

    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post=new Post();
        $post->title=$request->title;
        $post->desc=$request->description;
        $post->save();
        return redirect(route('posts.index'));
    }

    public function show($id)
    {
        $post=Post::find($id);
        //dd($post);
        return view('posts.view',compact('post'));
    }

    public function edit($id)
    {
        $post =Post::findorFail($id);
        return view('posts.edit',compact('post'));
  
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->desc = $request->description;
        $post->save();
        return redirect(route('posts.index'));
    
    }

    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect(route('posts.index'));
    }
    
    public function softDele()
    {
        $posts=Post::onlyTrashed()->get();
        return view('posts.softdele',compact('posts'));
    }

    public function restore($id){
        
        $post=Post::onlyTrashed()->where('id', $id)->restore();
        return redirect(route('posts.index'));
        
    }

    
    public function remove($id){
        
        $post=Post::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();
        
    }
}
