<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');});
Route::get('/register', function () {return view('register');});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::middleware('auth')->group(function() {
    Route::get('profile', [UserController::class, 'getProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/google',[\App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback',[\App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);
//Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
//Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
