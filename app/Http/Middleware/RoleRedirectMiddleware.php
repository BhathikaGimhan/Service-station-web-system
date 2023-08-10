<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleRedirectMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user is logged in
        if (Auth::check()) {
            // Check the user's role
            if (Auth::user()->role == $role) {
                // User's role matches the specified role, allow the request to continue
                return $next($request);
            }
        }

        // User's role doesn't match, redirect to a specific URL based on the role
        switch ($role) {
            case 'admin':
                return redirect('/admin');
            case 'user':
                return redirect('/user');
            // Add more cases for other roles if needed
            default:
                return redirect('/');
        }
    }
}
