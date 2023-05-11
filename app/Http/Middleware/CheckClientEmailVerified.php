<?php

namespace App\Http\Middleware;

use App\Exceptions\FailException;
use App\Models\Client;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckClientEmailVerified
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
        $user = auth()->user();

        if (!(auth()->user() instanceof Client || getModelFromToken($request->bearerToken()) instanceof Client)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }

        if (!$user->isVerified()) {
            throw new FailException(
                __("lang.emailNotVerified"),
                403
            );
        }

        return $next($request);
    }
}
