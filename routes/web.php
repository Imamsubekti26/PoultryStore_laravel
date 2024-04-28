<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\partnerController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kegiatan', function(){
    return view('contoh/main');
});

Route::get('/kegiatan/form', function(){
    return view('contoh/form');
});

Route::get('/login', function(){
    return view('login', ['title' => 'login']);
});

Route::get('/profile', function(){
    return view('profile', ['title' => 'profile', 'selected_menu' => '']);
});

Route::get('activity', [ActivityController::class, 'index']);
Route::get('activity/tambah', [ActivityController::class, 'create']);
Route::get('activity/edit/{id}', [ActivityController::class, 'edit']);

Route::get('car', [CarController::class, 'index']);
Route::get('car/tambah', [CarController::class, 'create']);
Route::get('car/edit/{id}', [CarController::class, 'edit']);

Route::get('partner', [PartnerController::class, 'index']);
Route::get('partner/tambah', [PartnerController::class, 'create']);
Route::get('partner/edit/{id}', [partnerController::class, 'edit']);

Route::get('employee', [EmployeeController::class, 'index']);
Route::get('employee/tambah', [EmployeeController::class, 'create']);
Route::get('employee/edit/{id}', [EmployeeController::class, 'edit']);

Route::get('trip', [TripController::class, 'index']);
Route::get('trip/tambah', [TripController::class, 'create']);
Route::get('trip/edit/{id}', [TripController::class, 'edit']);
