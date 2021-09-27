<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Session;
use Illuminate\Http\Request;

class Admin
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
      if(!Auth::user()->admin)
      {
        session::flash('info', 'You do not have permissions to perform this action. ');
        return redirect()->back();
      }
        return $next($request);
    }
}
