<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index () {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post_id) {
        return view('posts.show', compact('post_id'));
    }

    public function create () {
        return view('posts.create');
    }

    public function store () {

        Post::create(request(['title', 'body']));

        return redirect('/posts');
    }
}
