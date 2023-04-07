<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Show Landing Page
Route::get('/', function () {
    return view('landing');
});

// Show Home Page
Route::get('/home/{id}', [HomeController::class, 'index'])->middleware('checkUserId');

// Show Login Page
Route::get('/login', [LoginController::class, 'view'])->name('login')->middleware('guest');

// Authenticate Login
Route::post('/login', [LoginController::class, 'authenticate']);

// Log Out Button
Route::post('/logout', [LoginController::class, 'logout']);

// Show Register Page
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// Store Register Page's Data
Route::post('/register', [RegisterController::class, 'store']);

// Show Report Page
Route::get('/report', function () {
    return view('report');
});

// Show Userpage Page
Route::get('/userpage', function () {
    return view('userpage');
});

// Show Edit Profile Page
Route::get('/edit-profile/{id}', [RegisterController::class, 'showProfile'])->middleware('checkUserId');

// Show Edit Password Page
Route::get('/edit-password/{id}', [RegisterController::class, 'showPassword'])->middleware('checkUserId');

// Edit Profile
Route::patch('/edit-profile/{id}', [RegisterController::class, 'updateProf'])->middleware('checkUserId');

// Edit Password
Route::post('/edit-password/{id}', [RegisterController::class, 'updatePass'])->middleware('checkUserId');

// Edit Profile Picture
Route::post('/update-profile-picture/{id}', [RegisterController::class, 'updateProfilePicture'])->name('update-profile-picture');


// View Profile
Route::get('/view-profile', function (){
    return view('viewprofile');
});

Route::get('/edit-user', function (){
    return view('edituserprofile');
});

