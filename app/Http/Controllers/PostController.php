<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
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