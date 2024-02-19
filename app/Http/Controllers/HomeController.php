<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Descomentamos si queremos que sean rutas autenticadas
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
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
        return view('site.home.index');
    }
}
