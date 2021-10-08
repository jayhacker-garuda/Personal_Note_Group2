<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main Routes no Auth
Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/contact-us', [MainController::class, 'contact'])->name('main.contact');

// Auth
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginUser'])->name('auth.loginUser');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerUser'])->name('auth.saveUser');


// login route for admin only
Route::get('/admin/login', [AdminLoginController::class, 'adminLogin'])->name('admin.adminLogin');
Route::post('/admin/login', [AdminLoginController::class, 'loginAdmin'])->name('loginAdmin');

Route::middleware(['user_type'])->group(function () {
    // Admin Dashboard
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

// User Dashboard
Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard.index');