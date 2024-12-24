<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

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

    Route::get('/dashboard-psg', [AuthController::class, 'showPsgDashboard'])->name('dashboard-psg');
    
    // Edit profile route (GET)
    Route::get('/edit-profile', [AuthController::class, 'editProfile'])->name('edit-profile');
    
    // Update profile route (PUT)
    Route::put('/update-profile', [AuthController::class, 'updateProfile'])->name('update-profile');
    


    // Route to handle account deletion (POST or DELETE request)
    // Define the delete route
    Route::delete('/account/delete', [AuthController::class, 'deleteAccount'])->name('delete-account');
});


// Admin Login Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Protected Admin Routes (Only accessible after login)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'showUsers'])->name('admin.dashboard');

    // User Management Routes
    Route::get('/admin/create-user', [AdminController::class, 'showCreateUserForm'])->name('admin.create-user');
    Route::post('/admin/create-user', [AdminController::class, 'createUser'])->name('admin.store-user');
    Route::get('/admin/edit-user/{id}', [AdminController::class, 'showEditUserForm'])->name('admin.edit-user');
    Route::put('/admin/edit-user/{id}', [AdminController::class, 'updateUser'])->name('admin.update-user');
    Route::delete('/admin/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('admin.delete-user');

});

//approval
Route::middleware(['auth', 'check.approval'])->group(function () {
    // Routes that require approval
    Route::get('/psg-dashboard', [PsgController::class, 'dashboard']);
});

// Route for Pending Approval
Route::get('/pending-approval', [AuthController::class, 'showPendingApproval'])->name('pending-approval');
// Admin approves PSG user
Route::patch('/admin/approve-psg-user/{id}', [AdminController::class, 'approvePsgUser'])->name('admin.approve-psg-user');

