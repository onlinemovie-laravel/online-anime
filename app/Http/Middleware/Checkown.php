<?php

namespace App\Http\Middleware;

use Closure;

class Checkown
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
        dd($request);
        if (Auth::check()) {
            
            return $next($request);
        }
        else{
            return redirect()->back()->with('alert','Vui lòng đăng nhập để thực hiện tính năng này');
        }
    }
}
