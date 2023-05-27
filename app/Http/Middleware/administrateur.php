<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class administrateur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function Authorize()
    {
        return redirect()->route('dashboard')->with('warning', "Vous n'êtes pas autorisé à éffectuer cette action!");
    }

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            # code...
            if (auth()->user()->role_id != 4) {
                # code...
                return $this->Authorize();
            }
        } else {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
