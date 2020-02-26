<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {        
        if (Auth::user()->hasPermissionTo('Administer roles & permissions')) //If user has this //permission
        {
            return $next($request);
        }

        if ($request->is('posts/create'))//If user is creating a post
         {
            if (!Auth::user()->hasPermissionTo('Create Post'))
         {
            Auth::logout();
            } 
         else {
                return $next($request);
            }
        }
        

        if ($request->is('posts/*/edit')) //If user is editing a post
         {
            if (!Auth::user()->hasPermissionTo('Edit Post')) {
                Auth::logout();
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a post
         {
            if (!Auth::user()->hasPermissionTo('Delete Post')) {
                Auth::logout();
            } 
         else 
         {
                return $next($request);
            }
        }

        return $next($request);
  

     if ($request->is('crud/create'))//If user is creating a post
         {
            if (!Auth::user()->hasPermissionTo('Editor'))
         {
            Auth::logout();
            } 
         else {
                return $next($request);
            }
        }
        

        if ($request->is('cruds/*/edit')) //If user is editing a post
         {
            if (!Auth::user()->hasPermissionTo('Editor')) {
                Auth::logout();
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a post
         {
            if (!Auth::user()->hasPermissionTo('Editor')) {
                Auth::logout();
            } 
         else 
         {
                return $next($request);
            }
        }

        return $next($request);


        if ($request->is('staff/create'))//If user is creating a post
        {
           if (!Auth::user()->hasPermissionTo('Editor'))
        {
           Auth::logout();
           } 
        else {
               return $next($request);
           }
       }
       

       if ($request->is('staffs/*/edit')) //If user is editing a post
        {
           if (!Auth::user()->hasPermissionTo('Editor')) {
               Auth::logout();
           } else {
               return $next($request);
           }
       }

       if ($request->isMethod('Delete')) //If user is deleting a post
        {
           if (!Auth::user()->hasPermissionTo('Editor')) {
               Auth::logout();
           } 
        else 
        {
               return $next($request);
           }
       }

       return $next($request);


       
    }
}


