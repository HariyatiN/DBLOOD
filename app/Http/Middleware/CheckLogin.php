<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // User is authenticated, allow access to the route
            return $next($request);
        }

        // User is not authenticated, return an unauthorized response
        return response()->json([
            'status' => 401,
            'message' => 'Unauthorized: Please log in.',
            'data' => null,
        ], 401);
    }
}
