<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class adminaccess
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
        if (Auth::guard('admin')->user()->restaurant_id != $request->route('res_id')) {
           return redirect('/home');
       }
        return $next($request);
    }
}
