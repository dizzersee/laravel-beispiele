<?php

use \Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware(['auth:api'])->group(function() {

    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('testroute', function() {
        return "Diese Route ist nur für authentifizierte Benutzer zugänglich!";
    });

});
