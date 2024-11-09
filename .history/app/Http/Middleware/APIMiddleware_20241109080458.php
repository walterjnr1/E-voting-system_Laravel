<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class APIMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the Authorization header
        $authHeader = $request->header('Authorization');

        // Check if the Authorization header is present and starts with 'Bearer '
        if ($authHeader && preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];

            // Here you would typically validate the token (e.g., check it against a database or use a JWT library)
            // For demonstration purposes, let's assume a simple token check
            if ($this->isValidToken($token)) {
                // Token is valid, proceed with the request
                return $next($request);
            }
        }

        // If the token is invalid or not provided, return a 401 Unauthorized response
        return response()->json(['success' => true, 'message' => 'Login Is '], 401);
    }

    /**
     * A placeholder method for token validation.
     * In a real application, implement actual token validation logic here.
     */
    private function isValidToken($token)
    {
        // Example: Check if the token matches a predefined value (for demonstration only)
        return $token === 'your_valid_token';
    }
}
