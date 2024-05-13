<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsResponsable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()) {
            if(auth()->user()->is_responsable == 1) {
                return redirect()->route('homepage');
            } else {
                return redirect()->route('dashbord_per');
            }
        } else {
            return redirect()->route('login');
        }
    }

}
