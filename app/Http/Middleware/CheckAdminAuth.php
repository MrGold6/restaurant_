<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class CheckAdminAuth
{
    public function handle($request, Closure $next)
    {
        if(Cookie::get('Admin') != 'root' || Cookie::get('Password') != 'root')
            return view('admin/forms/form_auth');
        return $next($request);
    }
}
