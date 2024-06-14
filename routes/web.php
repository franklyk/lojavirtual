<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/banner-create',[BannerController::class, 'create'])->name('banner.create');
Route::post('/banner',[BannerController::class, 'post']);
