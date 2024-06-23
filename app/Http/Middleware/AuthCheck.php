<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('loginIdPembeli') && !session()->has('loginIdPenjual')) {
            return redirect('login')->with('fail', 'You have to login first.');
        }
        return $next($request);
    }
}


