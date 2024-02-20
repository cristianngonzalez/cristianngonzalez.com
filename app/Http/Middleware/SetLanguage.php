<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $idiomaCliente = $request->header('Accept-Language');
        //Tomar el primer idioma del cliente
        $idiomaCliente = explode(',', $idiomaCliente);
        $idiomaCliente = $idiomaCliente[0];

        $idiomasDisponibles = ['es' , 'en'];
        //Si el idioma esta entre la lista de disponibles
        if(in_array($idiomaCliente , $idiomasDisponibles)){
            //Usar el idioma del cliente
            app()->setLocale($idiomaCliente);
        }else{
            //Usar el idioma por defecto
            app()->setLocale('en');
        }

        return $next($request);
    }
}
