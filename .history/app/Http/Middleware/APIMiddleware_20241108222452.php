<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class APIMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Rate limiting logic
        $key = $request->ip(); // You can use a different key based on your needs
        if (RateLimiter::tooManyAttempts($key, 5)) {
            return response()->json(['error' => 'Too many requests'], 429);
        }

        RateLimiter::hit($key);

        return $next($request);
    }
}
