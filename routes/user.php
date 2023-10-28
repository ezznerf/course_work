<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::prefix('user')->middleware([ 'active'])->group(function ()
{
    Route::redirect('/', '/user/posts')->name('user');

    Route::get('posts', [PostController::class, 'index'])->name('posts');

    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

    Route::post('posts/', [PostController::class, 'store'])->name('posts.store');

    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');

    Route::put('post/{post}/like', [PostController::class, 'like'])->name('post.like');
});
