<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckApproval
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in and if they are approved
        if (Auth::check() && !Auth::user()->is_approved) {
            // If not approved, redirect to a "pending approval" page or show a message
            return redirect()->route('pending-approval');
        }

        return $next($request);
    }
}
