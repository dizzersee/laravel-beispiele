<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view-post', [App\Http\Controllers\PostController::class, 'viewPost']);
