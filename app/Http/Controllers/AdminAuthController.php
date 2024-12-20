<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle the login form submission
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to log the admin in
        if (Auth::attempt($credentials)) {
            // Check if the logged-in user is an admin
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                // If the user is not an admin, log them out and redirect
                Auth::logout();
                return redirect()->route('admin.login')->withErrors('You do not have admin access.');
            }
        }

        // If authentication fails, redirect back with an error
        return redirect()->route('admin.login')->withErrors('Invalid credentials.');
    }
}
