<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = auth('web')->user();
        if(auth('web')->user()->user_type != $role) {
            return abort(403);
        }
        if ($role === 'vendor') {
            if (!$user->store) {

                // Criar store automaticamente
                $user->store()->create([
                    'name' => $user->name . "'s Store",
                    'email' => $user->email,
                    'phone' => null,
                    'address' => null,
                    'short_description' => 'Loja criada automaticamente.',
                    'long_description' => null,
                    'logo' => null,
                    'banner' => null,
                    // se sua tabela tiver status ou outros campos, adicione aqui
                ]);
            }
        }

        return $next($request);
    }
}
