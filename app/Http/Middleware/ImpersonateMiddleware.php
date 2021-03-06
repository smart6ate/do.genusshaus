<?php

namespace Genusshaus\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ImpersonateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('impersonate')) {
            Auth::onceUsingId(session('impersonate'));
        }

        return $next($request);
    }
}
