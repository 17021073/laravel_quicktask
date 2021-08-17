<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;

class Locale
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
        $language = Session::get('language', App::getLocale());
        App::setLocale($language);

        return $next($request);
    }
}
