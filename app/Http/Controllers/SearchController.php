<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'search'=>'required',
        ]);

        $search = $request->input('search');
        
        $user = User::where('name','like',"%$search%")->first();
        if($user){
           $posts = Post::where('user_id',$user->id)->get();
        }else{
           $posts = Post::where('body','like',"%$search%")->get();
        }
        // dd($posts);
        
       return view('/search-results', compact('posts'));



    }

}
