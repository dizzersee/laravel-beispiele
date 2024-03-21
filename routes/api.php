<?php

use \Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware(['auth:api'])->group(function() {

    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('testroute', function() {
        $user = Auth::user();
        return "Hallo, " . $user->name . "!";
    });
});

Route::get('protectedroute', function() {
    $user = Auth::user();
    echo "ID: " . $user->id . "<br>";
    $post = \App\Models\Post::find(1);
    if($user->can('update', $post)) {
        $post->title = "New Title";
        $post->save();
        return "$post";
    } else {
        return "You are not allowed to update this post!";
    }

})->middleware('auth:api');
