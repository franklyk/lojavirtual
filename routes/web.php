<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionUserController::class, 'create'])->name('login');
Route::post('/login', [SessionUserController::class, 'store']);

