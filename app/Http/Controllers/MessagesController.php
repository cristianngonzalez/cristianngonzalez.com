<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importar la fachada de mail
use Illuminate\Support\Facades\Mail;
//Importar la clase email creada
use App\Mail\MessageReceived;

class MessagesController extends Controller{
   //Este metodo es el action del formulario en la vista
   public function sendMessage( Request $req ){
      //Variables de inputs
      $name = $req->input('name');
      $email = $req->input('email');
      $message = $req->input('message');

      /* El metodo send lleva como parametro la clase mail que creamos que a su vez
      llevara los datos del formulario como variables*/

      /*Esto es para enviar el mensaje (descomentar en produccion)*/
      Mail::to('contact@cristianngonzalez.com')->send(new MessageReceived($name , $email , $message));

     /*Esto es para mostrar como seria al mensaje (comentar en produccion) */
     //return new MessageReceived($name , $email , $message);

     return 'Mensaje enviado';
   }
}