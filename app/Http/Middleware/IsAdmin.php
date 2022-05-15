<?php

namespace App\Http\Middleware;

use Closure,
    Illuminate\Http\Request,
    Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if($user)
        {
            if($request->user()->role === $role)
            {
                return $next($request);
            }
            else 
            {
                abort(403);
            }
        }
        else 
        {
            return redirect('/admin');
        }
    }
}
