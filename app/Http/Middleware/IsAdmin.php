<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Assurer que l'utilisateur est connecté et est admin
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403, 'Access denied.');
        }
        return $next($request);
    }
}
