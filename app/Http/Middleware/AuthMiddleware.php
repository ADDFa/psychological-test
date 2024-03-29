<?php

namespace App\Http\Middleware;

use App\Http\Helper\Response;
use Closure;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();
        if (!$token) return Response::message("Tidak ada token yang ditemukan. Akses ditolak!", 403);

        try {
            $payload = JWT::decode($token, new Key(env("JWT_SECRET"), "HS256"));
            $request->user = $payload->user;
            return $next($request);
        } catch (Exception $e) {
            return Response::message($e->getMessage(), 500);
        }
    }
}
