<?php

use App\Http\Controllers\User\Category\{IndexCategoryController};
use App\Http\Controllers\User\Tag\{IndexTagController};
use App\Http\Controllers\User\Comment\{IndexCommentController, CreateCommentController, StoreCommentController, DeleteCommentController, EditCommentController,UpdateCommentController};
use App\Http\Controllers\User\Post\{IndexPostController, CreatePostController, DestroyPostController, StorePostController, DeletePostController, EditPostController,UpdatePostController};
use Illuminate\Support\Facades\Route;

Route::get('posts', IndexPostController::class)->name('posts.index');
Route::get('posts/create', CreatePostController::class)->name('posts.create');
Route::post('posts', StorePostController::class)->name('posts.store');
Route::delete('posts/{post}', DestroyPostController::class)->name('posts.destroy');
Route::get('posts/{post}/delete', DeletePostController::class)->name('posts.delete');
Route::get('posts/{post}/edit', EditPostController::class)->name('posts.edit');
Route::put('posts/{post}', UpdatePostController::class)->name('posts.update');

Route::get('comments', IndexCommentController::class)->name('comments.index');
Route::get('comments/create', CreateCommentController::class)->name('comments.create');
Route::post('comments', StoreCommentController::class)->name('comments.store');
Route::delete('comments/{comment}', DeleteCommentController::class)->name('comments.destroy');
Route::get('comments/{comment}/delete', DeleteCommentController::class)->name('comments.delete');
Route::get('comments/{comment}/edit', EditCommentController::class)->name('comments.edit');
Route::put('comments/{comment}', UpdateCommentController::class)->name('comments.update');

Route::get('tags', IndexTagController::class)->name('tags.index');

Route::get('categories', IndexCategoryController::class)->name('categories.index');
