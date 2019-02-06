<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visites;

class VisitesLogs
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
        $input = $request->all();
        $log = new Visites();
        $log->path = $request->path();
        $log->ip = $request->ip();
        $log->content = json_encode($input, JSON_UNESCAPED_UNICODE);
        $log->save();
        return $next($request);
    }
}
