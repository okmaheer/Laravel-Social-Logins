<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class Permissions
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
         // get route permissions
         $route = Route::getRoutes()->match($request);
         $actions = $route->getAction();
         $permissions = $actions['permissions'] ?? [];
         dd($permissions);
         // no permissions? allow access
         if (!$permissions) {
             return $next($request);
         } else {
              
             $user = auth()->user();
             dd($user);
             if ($user && $user->ability($permissions)) {
                 return $next($request);
             }
         }
        
         abort(401, 'you have no permission to access this route');
        //  return redirect()
        //      ->route('abort404')
        //      ->withErrors('Unauthorized Access!');
    }
    
}
