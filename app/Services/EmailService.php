<?php

namespace App\Services;

use Illuminate\Http\Request;
//Importar la fachada de mail
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
//Importar la clase email creada
use App\Mail\MessageReceived;

use App\Models\Message;


class EmailService
{

    /**
     * Enviar un correo electronico
     * @param string $to Destinatario del correo
     * @param string $subject Razon
     * @param string $message Mensaje
     * @param string $template Vistas html que tenemos cargadas para determinadas utilidades
     * @return void
     */
    public function sendEmail(string $to = null,string $subject = null,string $message = null,string $template = null){
        
        /*Esto es para enviar el mensaje (descomentar en produccion)*/
        Mail::to($to)->send(new MessageReceived($subject , $to , $message));

        /*Esto es para mostrar como seria al mensaje (comentar en produccion) */
        //return new MessageReceived($subject , $to , $message);

        return true;

    }
}
