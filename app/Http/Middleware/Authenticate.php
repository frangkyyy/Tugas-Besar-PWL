<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use app\models\User;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (auth()->check()) {
                if (auth()->user()->hasRole('prodi')) {
                    return route('admin.dashboard');
                } else {
                    return route('login');
                }
            } else {
                return route('login');
            }
        }
    }
}
