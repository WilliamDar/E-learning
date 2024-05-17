<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::get('/', function () {
    return view('auth');
});

 Route::get('/welcome', function () {
    return view('welcome');
 })->name('welcome');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/create', function () {
        return view('create_courses');
    })->name('create');
Route::group(['middleware' => 'auth'], function () {
    
});
