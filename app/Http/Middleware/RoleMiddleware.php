<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;  // Add this import statement

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {


        if (Auth::check()) {
            $userRole = Auth::user()->role;

            // Check if the user's role matches one of the allowed roles
            if (in_array($userRole, $roles)) {
                // If user is 'admin', allow access to the dashboard and admin routes
                if ($userRole === 'admin') {
                    return $next($request);
                }



                // If user is 'user', deny access to the dashboard and admin routes
                if ($userRole === 'user') {

                    // Deny access to the dashboard and admin routes
                    if ($request->is('/dashboard') || $request->is('admin/*')) {

                        return response()->view('errors.401', [], 401);
                    }
                    // Allow access to all other user routes
                    return $next($request);
                }
            }
        }
     return redirect()->route('user.home');

    }
}
