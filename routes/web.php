<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserUpdateController;
use App\Http\Controllers\ChangeEmailController;
use App\Http\Controllers\RoomsController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppliancesController;
use App\Http\Controllers\SettingsController;

Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('showLogin');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/upload-image', [UserUpdateController::class, 'uploadImage'])->name('uploadImage');
    Route::post('/delete-image', [UserUpdateController::class, 'deleteImage'])->name('deleteImage');
    Route::post('/change-name', [UserUpdateController::class, 'changeName'])->name('changeName');
    Route::post('/change-email', [ChangeEmailController::class, 'changeEmail'])->name('changeEmail');
    Route::post('/change-password', [UserUpdateController::class, 'changePassword'])->name('changePassword');

    //Navigation routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/setup', function() {
    return view('setup');
});
