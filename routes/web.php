<?php

use App\Http\Controllers\ComputersController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [NavigationController::class , "index"])->name('welcome');
Route::get('/home', [NavigationController::class , "home"])->name('home');
Route::get('/about', [NavigationController::class , "about"])->name('home.about');
Route::get('/contact', [NavigationController::class , "contact"])->name('home.contact');

Route::post('/login', [LoginController::class , "login"])->name('login.show');
Route::get('/login', [LoginController::class , "login"])->name('login');

Route::resource('/computers',  ComputersController::class);


