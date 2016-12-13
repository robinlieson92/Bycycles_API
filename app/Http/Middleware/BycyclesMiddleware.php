<?php

namespace App\Http\Middleware;

use Closure;

class BycyclesMiddleware
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
        $domains = ['http://localhost'];

        if (isset($request->server()['HTTP_ORIGIN'])) {
            $origin = $request->server()['HTTP_ORIGIN'];
            if (in_array($origin, $domains)) {
              header('Access-Control-Allow-Origin : ' .$origin);
              header('Access-Control-Allow-Methods : GET, POST, PUT, DELETE');
              header('Access-Control-Allow-Headers: Origin, Content-Type, Accept');
            }
        }
        return $next($request);
    }
}
