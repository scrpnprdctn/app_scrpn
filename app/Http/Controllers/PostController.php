<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Render a list of a my post.

    public function index(){
        return view('welcome', [
            'post' => Post::get()
        ]);
    }

    // Render one of my post by slug

    public function show($slug){
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }

    // Create one of my beautiful post

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        dd($request->request);
    }
}
