<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckApproval
{
    public function handle($request, Closure $next)
{
    if (auth()->check() && !auth()->user()->is_approved) {
        auth()->logout();
        return redirect()->route('pending-approval')->with('error', 'Your account is awaiting approval.');
    }

    return $next($request);
}

}
