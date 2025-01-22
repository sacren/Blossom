<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPageViewExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $pageParam = 'slug'): Response
    {
        $name = $request->route($pageParam);
        $view = 'page.' . $name;

        if (!view()->exists($view)) {
            abort(404);
        }

        return $next($request);
    }
}
