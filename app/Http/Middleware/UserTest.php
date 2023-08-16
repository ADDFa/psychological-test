<?php

namespace App\Http\Middleware;

use App\Http\Helper\Response;
use App\Models\UserTest as ModelsUserTest;
use Closure;
use Illuminate\Http\Request;

class UserTest
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
        $userId = $request->user->id;
        $userTest = ModelsUserTest::where("user_id", $userId)->first();
        if (!$userTest) return Response::message("Bukan Peserta Tes", 401);

        return $next($request);
    }
}
