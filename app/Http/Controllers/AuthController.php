<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        $user = Auth::user(); // This retrieves the currently authenticated user
        return view('dashboard-client', compact('user'));
    }

    // Show the counselor dashboard
    public function showCounselorDashboard()
    {
        return view('dashboard-counselor');
    }

    // Edit profile (update username and gender)
    public function editProfile()
    {
        $user = auth()->user(); // Get the currently authenticated user
        return view('edit-profile', compact('user'));
    }

    // Update the profile (username, gender, and password update)
    public function updateProfile(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female,other',
            'current_password' => 'required_with:new_password',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = Auth::user(); // Get the currently authenticated user

        // Update username and gender
        $user->name = $request->input('name');
        $user->gender = $request->input('gender');

        // If the password fields are provided, verify and change the password
        if ($request->filled('new_password')) {
            // Check if the provided current password matches the stored one
            if (!Hash::check($request->input('current_password'), $user->password)) {
                return back()->withErrors(['current_password' => 'Current password is incorrect.']);
            }
            // Update the password
            $user->password = Hash::make($request->input('new_password'));
        }

        // Save the updated user data
        $user->save();

        return redirect()->route('dashboard-client')->with('success', 'Profile updated successfully.');
    }

    public function showDeleteConfirmation()
    {
        return view('deleteconfirm');
    }

    // Handle account deletion after password confirmation
    public function deleteAccount(Request $request)
    {
        $user = auth()->user();
        
        // Validate the current password
        $request->validate([
            'current_password' => 'required',
        ]);

        // Check if the provided password is correct
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Delete the user's account (soft delete, optional)
        $user->delete(); // This will perform a soft delete

        // Log out the user
        Auth::logout();

        // Redirect to the homepage with a success message
        return redirect('/')->with('success', 'Your account has been deleted successfully.');
    }
}