<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use App\Models\Visitors as ModelsVisitors;
use Closure;
use Illuminate\Http\Request;

class Visitors
{
    public function handle(Request $request, Closure $next)
    {
        $ip = hash('sha512', $request->ip());
        if (ModelsVisitors::where('date', today())->where('ip', $ip)->count() < 1) {
            ModelsVisitors::create([
                'date' => today(),
                'ip' => $ip,
            ]);
        }
        return $next($request);
    }
}
