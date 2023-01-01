<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PoliceAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->isStarted()) session()->start();
        if (session()->get('role_id') != 2) {
            return redirect()->back();
        }
        // dd(session()->get("logged"));
        if (!session()->get("logged", false)) {
            return redirect()
                ->route("login-police")
                ->withErrors([
                    "msg" => "Harap Login Terlebih Dahulu"
                ]);
        }
        return $next($request);
    }
}
