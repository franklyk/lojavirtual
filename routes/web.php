<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionCotroller;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/dashboard', DashboardController::class);




Route::get('/banners/create',[BannerController::class, 'create']);
Route::post('/banners',[BannerController::class, 'store']);
Route::get('/banners/{banner}/edit',[BannerController::class, 'edit']);
Route::put('/banners/{banner}',[BannerController::class, 'update']);

Route::get('/products/create',[ProductController::class, 'create']);
Route::post('/products',[ProductController::class, 'store']);
Route::get('/products/{product}/edit',[ProductController::class, 'edit']);
Route::put('/products/{product}',[ProductController::class, 'update']);

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login/create', [SessionCotroller::class, 'create'])->name('login');
Route::post('/login', [SessionCotroller::class, 'store']);

Route::delete('/logout', [SessionCotroller::class, 'destroy']);


