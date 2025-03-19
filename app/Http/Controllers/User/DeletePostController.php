<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeletePostController extends Controller
{
    public function __invoke(Post $post )
    {
        return view('posts.delete');
    }
}
