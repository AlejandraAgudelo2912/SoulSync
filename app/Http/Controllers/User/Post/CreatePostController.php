<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;

class CreatePostController extends Controller
{
    public function __invoke()
    {
        return view('posts.create');
    }
}
