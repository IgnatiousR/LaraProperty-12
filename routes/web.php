<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });

// Route::get('/', function () {
//     return inertia('Listing/Index',
//     [
//         'listings' => Listing::all()
//     ]);
// });

Route::get('/', function () {
    return redirect()->intended('/listing');
});

Route::get('/hello', [IndexController::class, 'show'])->middleware('auth');
Route::resource('listing', ListingController::class)
->only(['create', 'store', 'update', 'destroy'])
->middleware('auth');

Route::resource('listing', ListingController::class)
->except(['create', 'store', 'update', 'destroy']);
// Route::post('/listing', [ListingController::class, 'store']);

Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class,'login'])->name('login');
    Route::post('/login', [LoginController::class,'authenicate'])->name('login.authenicate');
    Route::get('/register', [RegisterController::class,'register'])->name('register');
    Route::post('/register', [RegisterController::class,'store'])->name('register.store');
});

Route::post('/logout', [LoginController::class,'logout'])->name('logout');
