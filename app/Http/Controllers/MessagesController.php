<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importar la fachada de mail
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
//Importar la clase email creada
use App\Mail\MessageReceived;

use App\Models\Message;
use Throwable;

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
      Mail::to($email)->send(new MessageReceived($name , $email , $message));

      /*Esto es para mostrar como seria al mensaje (comentar en produccion) */
      //return new MessageReceived($name , $email , $message);

      return 'Mensaje enviado';
   }

   //Messages from contact section in the page
   public function contactMessage(Request $req){
      try{
         $name = $req->input('name');
         $email = $req->input('email');
         $message = $req->input('message');
   
         $message = new Message;
    
         $message->name = $req->input('name');
         $message->email = $req->input('email');
         $message->phone = $req->input('phone');
         $message->message = $req->input('message');
   
         $message->readed = false;
         $message->favorite = false;
   
         $message->save();
   
         Mail::to('contact@cristianngonzalez.com')->send(new MessageReceived($name , $email , $message));
   
         return redirect('/contact');
      }catch(Throwable $e){
         return redirect()->back()->with('status', 'error')->with('message' , 'Error al enviar el mensaje')->with('title', 'Opps!');
      }

     
   }

   public function openMessage(Message $message){
      return view('admin.messages.detail' , compact('message'));
   }

}