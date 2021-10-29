<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ApiBackendSecurity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $receivedToken = $request->header('x-wartullychat-api-access');
        if ($receivedToken !== env('WARTULLYCHAT_API_TOKEN'))
        {
            throw new UnauthorizedHttpException('Challenge', 'Invalid authentication');
        }
        return $next($request);
    }
}
