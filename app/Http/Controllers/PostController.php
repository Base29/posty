<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        // Validate request
        $this->validate($request, [
            'body' => 'required',
        ]);

        // Create post in database
        $request->user()->posts()->create($request->only('body'));

        return back();
    }
}