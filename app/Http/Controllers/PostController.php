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

    public function show(Post $post){

        return view('post', ['post' => $post]);
    }

    // Create one of my beautiful post

    public function create(){
        return view('create');
    }

    public function store(){

        Post::create($this->validatePost());

        return redirect('/post');
    }

    public function edit(Post $post){
        return view('edit', ['post' => $post]);
    }

    public function update(Post $post){

        $post->update($this->validatePost());

        return redirect(route('post.show', $post));
    }

    protected function validatePost(){
        return request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);
    }
}
