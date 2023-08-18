<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\BusinessSetting;

class Cors
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

            return $next($request)
            ->header('Acess-Control-Allow-Origin',"*");
         
        }
    }

