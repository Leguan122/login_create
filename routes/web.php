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
Route::get('/profile', function () {return view('profile');})->middleware('auth');

Route::post('/', [Controller::class, 'addUser']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);


