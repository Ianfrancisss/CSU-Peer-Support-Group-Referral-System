<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// Display welcome page by default
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

// Signup routes
Route::get('/signup', [AuthController::class, 'Signup'])->name('Signup');
Route::post('/signup', [AuthController::class, 'SignupPost'])->name('Signup.post');

// Logout route
Route::post('/logout', function () {
    Auth::logout();  // Log the user out
    session()->flash('success', 'You have been logged out successfully.');
    return redirect('/');  // Redirect to the homepage or another page
})->name('logout');

// Dashboard routes (protected)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard-client', [AuthController::class, 'showClientDashboard'])->name('dashboard-client');
    Route::get('/dashboard-counselor', [AuthController::class, 'showCounselorDashboard'])->name('dashboard-counselor');
    
    // Edit profile route (GET)
    Route::get('/edit-profile', [AuthController::class, 'editProfile'])->name('edit-profile');
    
    // Update profile route (PUT)
    Route::put('/update-profile', [AuthController::class, 'updateProfile'])->name('update-profile');
    
    // Route to show the delete confirmation modal (GET request)
Route::get('/account/delete', [AuthController::class, 'showDeleteConfirmation'])->name('deleteconfirm');

// Route to handle account deletion (POST or DELETE request)
Route::post('/account/delete', [AuthController::class, 'deleteAccount'])->name('delete-account');

});
