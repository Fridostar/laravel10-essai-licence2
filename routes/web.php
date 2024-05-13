<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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

// cette route affiche simplement la page d'instricption (GET)
Route::get('/register', [RegisterController::class, 'showIncriptionPage']);
// cette route permet de soumettre le formulaire (en POST) disponible sur la page
Route::post('/register', [RegisterController::class, 'doRegister']);

Route::get('/login', [LoginController::class, 'showIncriptionPage']);
Route::post('/login', [LoginController::class, 'doLogin']);

// home page
Route::post('/home', [HomeController::class, 'index']);

Route::get('/profile', function () {
    return view('profile');
})->name('user.profil');

