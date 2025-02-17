<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::any('login', [AuthController::class, 'login']);
    Route::any('register', [AuthController::class, 'register']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/all', [TaskController::class, 'index']);
    Route::post('/add', [TaskController::class, 'store']);
    Route::put('/upd/{task}', [TaskController::class, 'update']);
    Route::delete('/del/{task}', [TaskController::class, 'destroy']);
});
