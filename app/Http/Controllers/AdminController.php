<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show the users on the dashboard
    public function showUsers()
    {
        $users = User::all(); // Retrieve all users (or filter based on roles)
        return view('admin.dashboard', compact('users'));
    }

    // Show the user creation form
    public function showCreateUserForm()
    {
        return view('admin.create-user');
    }

    // Handle user creation
    public function createUser(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string|in:admin,client,psg',
        ]);

        // Create the new user
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->role = $validated['role'];
        $user->save();

        // Redirect back to the user list with a success message
        return redirect()->route('admin.dashboard')->with('success', 'User created successfully!');
    }

    // Show the edit user form
    public function showEditUserForm($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('admin.dashboard')->with('error', 'User not found.');
    }

    return view('admin.edit-user', compact('user'));
}


    // Handle user update
    public function updateUser(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $id,
        'role' => 'required|in:admin,client,psg',
    ]);

    $user = User::find($id);

    if (!$user) {
        return redirect()->route('admin.dashboard')->with('error', 'User not found.');
    }

    $user->update($validated);

    return redirect()->route('admin.dashboard')->with('success', 'User updated successfully.');
}


    // Handle user deletion
    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('admin.dashboard');
    }
    

    // Approve PSG user
    public function approvePsgUser($id)
    {
        $user = User::findOrFail($id);
        $user->update(['is_approved' => true]);
        return redirect()->route('admin.dashboard');
    }
}
