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
    return "Hallo, " . $user->name . "!";
})->middleware('auth:api');
