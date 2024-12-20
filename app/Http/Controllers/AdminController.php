<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        // Validate and create the user logic
    }

    // Show the edit user form
    public function showEditUserForm($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user'));
    }

    // Handle user update
    public function updateUser(Request $request, $id)
    {
        // Update user logic
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
