<?php

namespace App\Http\Middleware;

use App\Enums\ProviderStatusEnum;
use App\Events\YourEvent;
use App\Livewire\Auth\VerifyEmail;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (!(auth()->user()->provider->value === ProviderStatusEnum::zhavstudio) && (!auth()->user()->email_verified_at)){
                    return redirect()->to(route("pick-name"));
                }

                if (!auth()->user()->email_verified_at){
                    return redirect()->to(route('verify-email'));
                }

                return
                    match (auth()->user()->roles()->first()->name) {
                        "manager"   => redirect()->to(route("manager-panel")),
                        "admin"     => redirect()->to(route("admin-panel")),
                        default     => redirect()->to(route("user-panel"))
                    };
            }
        }

        return $next($request);
    }
}
