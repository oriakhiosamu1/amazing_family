<?php

namespace App\Http\Middleware;

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
        if(auth()->check()== true){
            if($request->user()->isAdmin == false){
                return $next($request);
            }

            return abort(403, 'Unauthorized User');
        }

        return redirect()->back();
        // return $next($request);
    }
}
