<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // memastikan sudah login
        if(!Auth::check()){
            return redirect(route('login'));
        }

        // melarang selain admin utk kembali ke dashboard
        if(Auth::user()->role !== 'admin'){ 
            return redirect(route('dashboard'));
        }

        return $next($request);
    }
}
