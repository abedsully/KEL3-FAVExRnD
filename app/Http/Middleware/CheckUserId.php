<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId = $request->route()->parameter('id');

            if ($userId != auth()->user()->id && auth()->user()->isAdmin != 1){
                abort(403, 'Unauthorized action.');
            }

        return $next($request);
    }
}
