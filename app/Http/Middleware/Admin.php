<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        $tipo = auth()->user()->tipo;
        if($tipo != 0){
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
