<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLevel
{
    public function handle($request, Closure $next, ...$levels)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if (!in_array($user->level, $levels)) {
            abort(403, 'Unauthorized'); // Atau redirect
        }

        return $next($request);
    }
}

