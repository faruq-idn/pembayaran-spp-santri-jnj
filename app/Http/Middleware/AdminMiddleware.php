<?php

// app/Http/Middleware/AdminMiddleware.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/admin/login');
        }

        return $next($request);
    }
}
