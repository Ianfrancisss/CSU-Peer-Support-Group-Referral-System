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
    
            // Check if user is a client
            if ($user->isClient()) {
                return redirect()->route('dashboard-client')->with('success', 'Welcome back!');
            }
    
            // Check if user is a PSG volunteer
            if ($user->isPsg()) {
                // If PSG user is not approved, redirect to pending approval page
                if (!$user->is_approved) {
                    return redirect()->route('pending-approval')->with('info', 'Your PSG volunteer account is under review and pending approval.');
                }
                return redirect()->route('dashboard-psg')->with('success', 'Welcome back!');
            }
        }
    
        // Redirect back to login if authentication fails
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
        "password" => "required|min:6|confirmed", // Confirm password validation
        "role" => "required|in:client,psg", // Ensure role is client or psg
    ]);

    $user = new User();
    $user->name = $request->fullname;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role = $request->role; // Save the role

    // Set approval status based on role
    if ($user->role === 'psg') {
        $user->is_approved = false; // PSG is pending approval
    } else {
        $user->is_approved = true; // Clients are automatically approved
    }

    $user->save();

    // Log in the user after registration
    auth()->login($user);

    // Redirect based on the role and approval status
    if ($user->isClient()) {
        return redirect()->route('dashboard-client')->with('success', 'Registration successful!');
    } elseif ($user->isPsg() && !$user->is_approved) {
        // If PSG and not approved, redirect to pending approval page
        return redirect()->route('pending-approval')->with('info', 'Your PSG volunteer account is under review and pending approval.');
    }

    return redirect(route("signup"))->with("error", "Failed to create account. Please try again.");
}


public function showPendingApproval()
{
    return view('pending-approval');
}


    // Show the client dashboard
    public function showClientDashboard()
    {
        $user = Auth::user(); // This retrieves the currently authenticated user
        return view('dashboard-client', compact('user'));
    }

    // Show the psg dashboard (updated from counselor dashboard)
    public function showPsgDashboard()
{
    $user = Auth::user(); // This retrieves the currently authenticated user
    return view('dashboard-psg', compact('user'));
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
