<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = DB::table('post')->get();
        return view('posts', compact('posts'));
    }

    public function addPost(){
        return view('add-post');
    }

    public function addPostSubmit(Request $request){
        DB::table('post')->insert([
            'title' => $request->title,
            'body'=> $request->post,

        ]);

        return back()->with('post_created', 'Post has been created successfully!');
    }
}
