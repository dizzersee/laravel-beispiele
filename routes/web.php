<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view-post', [App\Http\Controllers\PostController::class, 'viewPost']);
Route::get('/create-post', [App\Http\Controllers\PostController::class, 'createPost']);
Route::get('/create-post-2', [App\Http\Controllers\PostController::class, 'createPost2']);
Route::get('/view-all-posts', [App\Http\Controllers\PostController::class, 'viewAllPosts']);
Route::get('/view-post/{id}', [App\Http\Controllers\PostController::class, 'viewPost']);
