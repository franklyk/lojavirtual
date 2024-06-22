<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);


// Route::get('/', function () {
//     return view('home');
// });

Route::get('/banners/create',[BannerController::class, 'create'])->name('create');
Route::post('/banners',[BannerController::class, 'store']);
Route::get('/banners/{banner}/edit',[BannerController::class, 'edit'])->name('edit');
Route::put('/banners/{banner}',[BannerController::class, 'update']);
