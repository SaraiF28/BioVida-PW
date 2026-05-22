<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class DefacementMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Solo en entorno local
        if (app()->environment('local')) {
            $flagPath = storage_path('app/defaced');

            if (file_exists($flagPath) && trim(file_get_contents($flagPath)) === '1') {
                return response()->view('defaced');
            }
        }

        return $next($request);
    }
}
