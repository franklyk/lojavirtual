<?php


use App\Models\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PermissionController;
// use App\Http\Controllers\ProfileUserImageController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Permission;
// use App\Http\Controllers\UserImageController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Vamos logar com o usuário de id 1 e dar permissão de admin
// auth()->loginUsingId(1);
// $user = User::find(1)->assignPermission('admin');

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('home');
});

// Vamos logar com o usuário de id 1 e dar permissão de admin
// auth()->loginUsingId(1);
// $user = User::find(1)->assignPermission('admin');

Route::get('/test-permission', PermissionController::class)
    ->name('test-permission')
    ->middleware('auth', 'can:admin');

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth', 'can:default');

Route::get('/teste-permission', PermissionController::class)->name('teste-permission');


Route::get('/dashboard', DashboardController::class)->middleware('auth');


Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])->middleware('guest')->name('password.reset');;
Route::post('/reset-password', [ResetPasswordController::class, 'store'])->middleware('guest')->name('password.update');



Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{user}/edit', [UserController::class, 'edit']);
Route::patch('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{user}', [UserController::class, 'destroy']);



