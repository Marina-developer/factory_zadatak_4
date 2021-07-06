<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;
class Localization
{
    public function handle($request, Closure $next)
    {
        app()->setLocale($request->segment(1));
        return $next($request);
    }
}
