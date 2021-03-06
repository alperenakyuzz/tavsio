<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/***
 * Class RedirectIfNotAdmin
 * @package App\Http\Middleware
 */
class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/tavsiocms/login');
        }

        return $next($request);
    }
}
