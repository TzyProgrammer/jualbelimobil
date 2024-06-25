<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('loginIdPembeli') && (url('login') == $request->url() || url('daftar') == $request->url())) {
            return redirect('/');
        }
        if (session()->has('loginIdPenjual') && (url('login') == $request->url() || url('daftar') == $request->url())) {
            return redirect('/dashboard/produk');
        }
        return $next($request);
    }
}


