<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Show the login form
    public function login()
    {
        return view("auth.login");
    }

    // Handle login post request
    public function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6",
        ]);

        $credentials = $request->only("email", "password");

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->isClient()) {
                return redirect()->route('dashboard-client')->with('success', 'Welcome back!');
            } elseif ($user->isCounselor()) {
                return redirect()->route('dashboard-counselor')->with('success', 'Welcome back!');
            }
        }

        return redirect(route("login"))->with("error", "Login failed. Please check your credentials.");
    }

    // Show the signup form
    public function signup()
    {
        return view("auth.signup");
    }

    // Handle signup post request
    public function signupPost(Request $request)
    {
        $request->validate([
            "fullname" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6",
            "role" => "required|in:client,counselor",
        ]);

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        if ($user->save()) {
            auth()->login($user);

            if ($user->isClient()) {
                return redirect()->route('dashboard-client')->with('success', 'Registration successful!');
            } elseif ($user->isCounselor()) {
                return redirect()->route('dashboard-counselor')->with('success', 'Registration successful!');
            }
        }

        return redirect(route("signup"))->with("error", "Failed to create account. Please try again.");
    }

    // Show the client dashboard
    public function showClientDashboard()
    {
        return view('dashboard-client');
    }

    // Show the counselor dashboard
    public function showCounselorDashboard()
    {
        return view('dashboard-counselor');
    }
}
