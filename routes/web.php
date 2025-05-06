<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show']);
Route::resource('listing', ListingController::class);
// Route::post('/listing', [ListingController::class, 'store']);
Route::get('/login', [AuthController::class,'login']);
Route::post('/login', [AuthController::class,'store']);
Route::delete('/login', [AuthController::class,'destroy']);
Route::get('/register', [AuthController::class,'register']);
Route::post('/register', [AuthController::class,'create']);
