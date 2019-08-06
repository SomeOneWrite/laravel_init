<?php

namespace App\Http\Middleware;

use Closure;

class VkLogin
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
        return $next($request);
    }

    protected function redirectTo($request)
    {
        return redirect()->route('login', ['server_redirect_uri' => $request->url()]);
        //return route('login');//;

    }
}
