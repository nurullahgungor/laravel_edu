<?php
// Middleware'lar gelen requestleri filtrelemeye yarayan katmanlardır.
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Auth::user()->is_admin = 0
        if ( true ) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
