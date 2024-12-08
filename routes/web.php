<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::middleware("auth")->group(function () {
    Route::view("/", "welcome")->name("home");
});

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");

Route::get("/Signup", [AuthController::class,"Signup"])->name("Signup");

Route::post("/Signup", [AuthController::class, "SignupPost"])->name("Signup.post");