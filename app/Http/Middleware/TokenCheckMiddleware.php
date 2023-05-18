<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenCheckMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');

        $validToken = "SquirtleUsesWatergun-PikachuUsesThunderShock";

        if ($token !== $validToken) {
            return response()->json([
                'error' => 'Unauthorized',
                'error_message' => 'Invalid token.'
            ], 401);
        }

        return $next($request);
    }
}
