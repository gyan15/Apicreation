<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\Session;

class CheckSession
{
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();

        $existingSession = Session::where('ip_address', $ip)->first();

        if ($existingSession) {
            return response()->json(['message' => 'Another session is already in progress.'], 429);
        }

        Session::create(['ip_address' => $ip]);

        return $next($request);
    }
}
