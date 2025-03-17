<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Auth;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AuthController::class, 'login'])->name('login');
Route::post('/',[AuthController::class, 'auth_login']);
