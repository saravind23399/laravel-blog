<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }
    public function create() {
      return view('posts.create');
    }
    public function store(Request $request) {
      $inputs = $request->all();
      $post = new Post();
      $post->title = $inputs['title'];
      $post->body = $inputs['body'];
      $post->save();
      return redirect()->route('posts.index');
    }
}
