<?php

use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/car', [CarController::class, 'list']);
Route::get('/car/{id}', [CarController::class, 'show']);
Route::post('/car', [CarController::class, 'store']);
Route::put('/car/{id}', [CarController::class, 'update']);
Route::delete('/car/{id}', [CarController::class, 'destroy']);
