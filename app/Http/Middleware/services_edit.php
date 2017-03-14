<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;

class services_edit
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


          if (Auth::check() && Auth::user()->servicesCheck(3) )
          {
              return $next($request);
          }
          else{

            Session::flash('message', 'Niestety twoje konto nie posiada dostępu');
            return Redirect::to('/');

          }
    }
}
