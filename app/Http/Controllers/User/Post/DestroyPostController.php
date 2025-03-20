<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyPostController extends Controller
{
    public function __invoke(Post $post )
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
