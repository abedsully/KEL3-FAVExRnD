<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing Page
Route::get('/', function () {
    return view('landing');
});

// Home Page
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

// Login Page
Route::get('/login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register Page 1 and 2
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Report
Route::get('/report', function () {
    return view('report');
});

// User profile Page
Route::get('/userpage', function () {
    return view('userpage');
});

// Edit Profile
Route::get('/edit-profile', [UserController::class, 'index'])->middleware('isAdmin');

Route::get('/editpassword', function () {
    return view('editpassword');
});
