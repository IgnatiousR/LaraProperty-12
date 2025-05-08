<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show'])->middleware('auth');
Route::resource('listing', ListingController::class)
->only(['create', 'store', 'update', 'destroy'])
->middleware('auth');

Route::resource('listing', ListingController::class)
->except(['create', 'store', 'update', 'destroy']);
// Route::post('/listing', [ListingController::class, 'store']);

Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class,'login'])->name('login');
    Route::post('/login', [LoginController::class,'authenicate']);
});

Route::post('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/register', [RegisterController::class,'register']);
Route::post('/register', [RegisterController::class,'store']);
