<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;

/*
| API Routes
*/

//Auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login'); 
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

//Public routes
Route::apiResource('authors', AuthorController::class)->only(['index', 'show']);
Route::apiResource('genres', GenreController::class)->only(['index', 'show']);

//Transactions routes
Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::apiResource('transactions', TransactionController::class)->only(['index', 'destroy']);
});

Route::middleware(['auth:api', 'role:customer'])->group(function () {
    Route::apiResource('transactions', TransactionController::class)->only(['store', 'update', 'show']);
});