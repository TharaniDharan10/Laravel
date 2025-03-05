<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

//how created global middleware?
//do php artisan make:middleware <name>
//go to path where its created
//write handle function in it
//go to bootstrap->app.php->use copied path of namespace from <name> and \filename
//under withMiddleware, append the middleware class
class agevalid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            // echo "from age check"; //its global
            // echo "<pre>";
            // print_r($request->age);
            // if($request->age<18){
            //     die("You cannot visit the site");
            // }
            return $next($request);
    }
}
