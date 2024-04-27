<?php

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
