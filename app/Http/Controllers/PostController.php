<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = \DB::table('posts')->get();
        return view('welcome',compact('post'));
    }

    public function show($slug){
        $post = \DB::table('posts')->where('slug', $slug)->first();

        return view('post', compact("post"));
    }
}
