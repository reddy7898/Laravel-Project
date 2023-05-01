<?php

namespace App\Http\Controllers;
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
// Route::get('/', [PagesController::class, 'home']);
// Route::get('/about', [PagesController::class, 'about']);
// Route::get('/contact', [PagesController::class, 'contact']);
// Route::get('/details', [PagesController::class, 'details']);

// Route::resource('product', ProductController::class);
Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/register', [CustomAuthController::class, 'register']);
Route::post('/registeruser', [CustomAuthController::class, 'registerUser'])->name('registeruser');
Route::post('/resetpassword', [CustomAuthController::class, 'resetPassword'])->name('resetpassword');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
// Route::get('/base/{name}', function ($name) {
//     // return view('layouts.base');
//     return "This is". $name; 
// });
