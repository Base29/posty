<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function store(Request $request)
    {
        dd('Add Post');
    }
}