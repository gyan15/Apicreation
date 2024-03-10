<?php
namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class CloseLimitationController extends Controller
{
    public function closePreviousSession(Request $request)
    {
        $ip = $request->ip();

        // Close previous session
        Session::where('ip_address', $ip)->delete();

        return response()->json(['message' => 'Previous session closed successfully']);
    }
}
