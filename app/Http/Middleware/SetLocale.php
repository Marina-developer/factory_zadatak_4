<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Closure;
use Session;
use App;
use Config;
class SetLocale
{
    public function handle($request, Closure $next)
    {
        app()->setLocale($request->segment(1));
        
        return $next($request);
    }
}
