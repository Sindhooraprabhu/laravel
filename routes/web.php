<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Home page - can be a separate view or redirect to posts.index
Route::get('/', function () {
    return view('home');  // if you have a home.blade.php
})->name('home');

// Resource routes for posts (handles index, create, store, etc.)
Route::resource('posts', PostController::class);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
