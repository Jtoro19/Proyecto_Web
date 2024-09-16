<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     public function handle(Request $request, Closure $next, $roles)
     {
         // Obtener el rol desde la sesión
         $roleName = session('roleName');
         
         // Separar los roles pasados por la ruta
         $newRol = explode('|', $roles);
         
         // Verificar si el rol del usuario está en la lista de roles permitidos
         if (!in_array($roleName, $newRol)) {
             return abort(403, __('Unauthorized'));
         }
 
         // Continuar con la solicitud si el rol es válido
         return $next($request);
     }
}
