<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\Session;

class TerminateSession
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        $ip = $request->ip();
        Session::where('ip_address', $ip)->delete();
    }
}
