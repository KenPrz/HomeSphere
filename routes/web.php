<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserUpdateController;

Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('showLogin');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/upload-image', [UserUpdateController::class, 'uploadImage'])->name('uploadImage');
    Route::post('/delete-image', [UserUpdateController::class, 'deleteImage'])->name('deleteImage');
    Route::post('/change_name', [UserUpdateController::class, 'change_name'])->name('change_name');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
