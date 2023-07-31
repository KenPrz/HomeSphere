<?php


use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserUpdateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These`
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Page
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('showLogin');
    }
})->name('home');

// Dashboard
Route::middleware('auth')->group(function () {
    // routes/web.php
    Route::post('/upload-image',[UserUpdateController::class, 'uploadImage'])->name('uploadImage');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Registration
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');