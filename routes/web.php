<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
 return view('welcome');
});

Route::resource('products', ProductController::class);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Dashboard (Protected Route)
Route::middleware('auth')->get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Logout Route
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
