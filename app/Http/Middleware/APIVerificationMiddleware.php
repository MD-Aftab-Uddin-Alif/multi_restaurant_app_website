<?php

namespace App\Http\Middleware;

use Closure;

class APIVerificationMiddleware
{
    public function handle($request, Closure $next)
    {
        $appKey = $request->header('APP-KEY');
        $ApiToken = $request->header('API-TOKEN');

        if ($appKey == 'Bearer ' . env('APP_KEY') && $ApiToken == 'Bearer ' . env('API_TOKEN')) {
            return $next($request); // Continue with the request
        } else {
            return response()->json([
                'message' => 'Invalid header',
            ], 401); // Unauthorized status code
        }
    }
}