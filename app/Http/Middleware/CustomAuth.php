<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class CustomAuth
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
      /*$path=$request->path();
        if(($path=='index'||$path=="login")&&(Session::get('students')))
        {
            return redirect('/home');
          
        }
        else if($path!='index'&& Session::get('students')&& ($path!='login'&& Session::get('students'))
        {
            return view('index');
        }*/


        return $next($request);
    }
}
