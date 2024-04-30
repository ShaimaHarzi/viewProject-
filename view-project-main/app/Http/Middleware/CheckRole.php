<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($role == 'admin' && auth()->user()->role_id != 1) {
            abort(403, "Access only for admins");
        }
        if ($role == 'studen' && auth()->user()->role_id != 2) {
            abort(403, "Access only for students");
        }
        if ($role == 'tutor' && auth()->user()->role_id != 3) {
            abort(403, 'Access only for tutors');
        }
        if ($role == 'mentor' && auth()->user()->role_id != 4) {
            abort(403, "Access only for mentors");
        }
        if ($role == 'institute' && auth()->user()->role_id != 5) {
            abort(403, "Access only for institutors");
        }
        if ($role == 'gardian' && auth()->user()->role_id != 6) {
            abort(403, "Access only for guardians");
        }
        return $next($request);
    }
}
