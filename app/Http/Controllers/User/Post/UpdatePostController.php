<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class UpdatePostController extends Controller
{
    public function __invoke(Post $post, UpdatePostRequest $request)
    {
        $post->update(request()->all());
        return redirect()->route('posts.index');
    }
}
