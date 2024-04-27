<?php

use App\Http\Controllers\ActivityController;
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
    return view('login');
});

Route::get('activity', [ActivityController::class, 'index']);
Route::get('activity/tambah', [ActivityController::class, 'create']);
Route::get('activity/edit/{id}', [ActivityController::class, 'edit']);
