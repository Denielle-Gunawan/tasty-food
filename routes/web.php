<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SesiController::class, 'index']);
Route::post('/',[SesiController::class, 'login']);
Route::get('/login',[SesiController::class, 'index']);
Route::post('/login',[SesiController::class, 'login']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});
