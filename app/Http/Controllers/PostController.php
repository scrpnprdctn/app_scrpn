<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Render a list of a my post.

    public function index(){
        return view('welcome', [
            'post' => Post::orderBy('id', 'DESC')->get()
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

    public function store(){

        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required'
        ]);

        $post = new Post();
        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');
        $post->save();

        return redirect('/post');
    }

    public function edit($slug){

        $post = Post::where('slug', $slug)->firstOrFail();
        return view('edit', compact('post'));
    }

    public function update($slug){

        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required'
        ]);
        
        $post = Post::where('slug', $slug)->firstOrFail();

        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');
        $post->save();

        return redirect('/post/'. $post->slug);

    }
}
