<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class ApiAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next) 
    {
    	$token = $request->bearerToken();

        $user = \App\Models\User::where('access_token', $token)->first();
        	
        if ($user) {
         
                    $request->request->add(['user_id' => $user->id]);
            
            return $next($request);
        }
        return response([
            'message' => 'Unauthenticated'
        ], 403);
    
    }
}
