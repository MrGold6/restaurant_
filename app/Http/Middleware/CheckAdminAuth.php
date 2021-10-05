<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class CheckAdminAuth
{
    public function handle($request, Closure $next)
    {
        if(Cookie::get('Admin') != 'root' || Cookie::get('Password') != 'root')
            return redirect()->route('AdminIn');
        return $next($request);
    }
}
