<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Acceso
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
        if (Auth::check()==false)
            {
                $request->session()->flash('css', 'warning');
                $request->session()->flash('mensaje', 'Debes estar logueado para accesar a este contenido');
                return redirect('/login');
            }
        return $next($request);
    }
}
