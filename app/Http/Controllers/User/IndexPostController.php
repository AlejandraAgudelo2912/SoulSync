<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexPostController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
