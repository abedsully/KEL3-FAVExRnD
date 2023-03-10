<?php

use App\Http\Controllers\PostController;
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
Route::get('/home', [PostController::class, 'index']);

// Login Page
Route::get('/login', function () {
    return view('login');
});

// Register Page
Route::get('/register', function () {
    return view('register');
});

// Add Post Page
Route::get('/add-post', [PostController::class, 'create']);

// Store Add Post
Route::post('/store-post', [PostController::class, 'store']);
