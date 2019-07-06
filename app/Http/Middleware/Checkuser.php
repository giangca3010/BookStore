<?php

namespace App\Http\Middleware;

use Closure;

class Checkuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('users')) {
            $request->request->add(['user' => session('users')]);
            return $next($request);
        }
        return redirect('/');
    }
}
