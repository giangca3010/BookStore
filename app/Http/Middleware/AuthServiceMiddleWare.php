<?php


namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;



class AuthServiceMiddleWare
{
    public function handle($request, \Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }
        return redirect('/');
    }
}