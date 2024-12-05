<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Ensure this view exists
    }

    public function showClientSignupForm()
    {
        return view('client-signup'); // Replace with your client sign-up view
    }

    public function showCounselorSignupForm()
    {
        return view('counselor-signup'); // Replace with your counselor sign-up view
    }
}
