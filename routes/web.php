<?php

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

Route::get('/', function () {
    return view('home'); // Home page
})->name('home');

use App\Http\Controllers\AuthController;
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/signup/client', [AuthController::class, 'showClientSignupForm'])->name('client-signup');

Route::get('/signup/counselor', [AuthController::class, 'showCounselorSignupForm'])->name('counselor-signup');

