<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->is_admin == 1) {
                return redirect('/admin/halal');
            } else if (Auth::user()->nama_role == 'penyuplai') {
                return redirect('/member/form-penyuplai');
            } else if (Auth::user()->nama_role == 'binaan') {
                return redirect('/member/halal/binaan');
            } else {
                return redirect('/member/form-penyuplai');
            }
        }



        return $next($request);
    }
}
