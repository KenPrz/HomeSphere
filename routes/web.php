<?php


use App\Http\Controllers\authController;
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

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('showLogin');
    }
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/login', [authController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [authController::class, 'login'])->name('login');

Route::get('/register', function () {
    return redirect()->route('login');
});
Route::post('/register', [authController::class, 'register'])->name('register');

Route::get('/logout', [authController::class, 'logout'])->name('logout');