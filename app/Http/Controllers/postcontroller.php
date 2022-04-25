<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class postcontroller extends Controller
{
    //
    public function addpost()
    {
        return view('add-post');
    }
    public function createPost(Request $request)
    {
        $posts = new posts();
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->save();
        return back()->with('post_created','Post has been created successfully!');
    }
    public function getpost()
    {
        $posts = posts::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));  // 1st posts is view name and 2nd posts is variable posts i.e $posts
    }
}
