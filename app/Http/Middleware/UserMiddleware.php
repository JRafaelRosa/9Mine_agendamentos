<?php

namespace App\Http\Middleware;

use App\Models\UsuarioModel;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
            return $next($request);
        }
        return redirect()->route('site.login')->with('previous_url', url()->previous());

    }
}
