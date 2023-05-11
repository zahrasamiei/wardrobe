<?php

namespace App\Http\Middleware;

use App\Exceptions\FailException;
use App\Models\Admin;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminMiddleware
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
        if (!(auth()->user() instanceof Admin) && !(getModelFromToken($request->bearerToken()) instanceof Admin)) {
            throw new FailException(
                __("lang.forbidden"),
                403
            );
        }
        return $next($request);
    }
}
