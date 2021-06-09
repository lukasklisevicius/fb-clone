<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\UserPostController;

class PostController extends Controller
{

    
    public function index(){
     $posts = Post::latest()->with('user','likes')->paginate(2);
     return view('posts.index',[
         'posts' => $posts,
     ]);
    }

    public function show(Post $post,Comment $comment){
        $comments = Comment::latest()->with('user');
        return view('posts.show',[
            'post'=>$post,
            'comments'=> $post->comments,
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'body'=>'required'
        ]);

        $request->user()->posts()->create($request->only('body'));
        return back();
    }

    public function destroy(Post $post){
        $this->authorize('delete',$post);
        $post->delete();
        return back();

    }
}
