<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StorePostController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->create(request()->all());
        return redirect()->route('posts.index');
    }
}
