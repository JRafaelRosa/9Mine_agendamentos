<?php

namespace App\Http\Middleware;

use App\Models\PerfilModel;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PermissaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()) {

            // Obtém o perfil do usuário autenticado
            $perfil = auth()->user()->perfil;

            // Verifica se o perfil do usuário está configurado
            if ($perfil) {
                // Obtém a permissão do perfil
                $permissions = PerfilModel::permissoes();

                // Verifica se o perfil tem a permissão necessária
                if (isset($permissions[$request->route()->getName()]) &&
                    $perfil->permissao_id == $permissions[$request->route()->getName()]) {
                    return $next($request); // Permite o acesso à rota
                }
            }
        }

        return redirect()->route('home')->withErrors('Você não tem permissão para acessar esta página.');
    }
}
