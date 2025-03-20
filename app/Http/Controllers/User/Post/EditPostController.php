<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class EditPostController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
}
