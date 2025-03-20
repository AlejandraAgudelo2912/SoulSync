<?php

use App\Http\Controllers\User\Post\{IndexPostController, CreatePostController, DestroyPostController, StorePostController, DeletePostController, EditPostController,UpdatePostController};
use Illuminate\Support\Facades\Route;

Route::get('posts', IndexPostController::class)->name('posts.index');
Route::get('posts/create', CreatePostController::class)->name('posts.create');
Route::post('posts', StorePostController::class)->name('posts.store');
Route::delete('posts/{post}', DestroyPostController::class)->name('posts.destroy');
Route::get('posts/{post}/delete', DeletePostController::class)->name('posts.delete');
Route::get('posts/{post}/edit', EditPostController::class)->name('posts.edit');
Route::put('posts/{post}', UpdatePostController::class)->name('posts.update');
