<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;
        if (!$roles){
            return $next($request);
        }
        if($request->user() == null){
            return response("You don't have permissions to access this page",401);
        }
        if($request->user()->hasAnyRole($roles)){
            return $next($request); 
        }
        return response("You don't have permissions to access this page",401);
    }
}
