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
            'post'=> $request->post,

        ]);

        return back()->with('post_created', 'Post has been created successfully!');
    }

    public function getPostById($id){
        $posts = DB::table('post')->where('id', $id)->first();
        return view('single-post', compact('posts'));
    }

    public function deletePostById($id){
        $posts = DB::table('post')->where('id',$id)->delete();
        return back()-> with('post_deleted', 'Post has been deleted');
        
    }

    public function editPostById($id){
       $posts = DB::table('post')->where('id', $id)->first();
        return view('edit-post', compact('posts'));
    }

    public function updatePostById(Request $request){
        DB::table('post')->where('id',$request->id)->update([
            'title' => $request->title,
            'post'=> $request->post,

        ]);

        return back()->with('post_updated', 'Post has been updated successfully!');
    }

    public function innerJoinClause(){
        $request = DB::table('users')
                -> join('post','users.id','=','post.user_id')
                ->select('users.name','post.title','post.post')
                ->get();
        return $request;
    }

    public function leftJoinClause(){
        $result = DB::table('users')
                ->leftJoin('post', 'users.id', '=', 'post.user_id')
                ->get();
        return $result;
    }

    public function rightJoinClause(){
        $result = DB::table('users')
                ->rightJoin('post', 'users.id', '=', 'post.user_id')
                ->get();
        return $result;
    }
}
