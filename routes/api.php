<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PartnerController;
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

Route::get('/partner', [PartnerController::class, 'list']);
Route::get('/partner/{id}', [PartnerController::class, 'show']);
Route::post('/partner', [PartnerController::class, 'store']);
Route::put('/partner/{id}', [PartnerController::class, 'update']);
Route::delete('/partner/{id}', [PartnerController::class, 'destroy']);