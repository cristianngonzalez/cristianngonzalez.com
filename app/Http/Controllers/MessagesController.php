<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importar la fachada de mail
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
//Importar la clase email creada
use App\Mail\MessageReceived;
//Services
use App\Services\EmailService;

use App\Models\Message;
use Throwable;

class MessagesController extends Controller{

   protected $emailService;

   public function __construct(EmailService $emailService){
      $this->emailService = $emailService;
   }
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
         
         $req->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255|regex:/^(\+\d{1,3})?,?\s?\d{8,13}$/',
         ]);

         $name = $req->input('name');
         $email_address = $req->input('email');
         $content_message = $req->input('message');
         $phone = $req->input('phone');
   
         $message = new Message();
    
         $message->name = $name;
         $message->email = $email_address;
         $message->phone = $phone;
         $message->message = $content_message;
         $message->readed = false;
         $message->favorite = false;
   
         $message->save();

         //Mensaje para mi mismo
         $email = $this->emailService->sendEmail('contact@cristianngonzalez.com', 'Gracias por tu mensaje', "Alguien ha dejado su mensaje, su correo es: " . $email_address . " y su mensaje es </br>" . $content_message , 'emails.message');
         //Mensaje para la huesped
         $email = $this->emailService->sendEmail($email_address, 'Gracias por tu mensaje', 'Gracias por tu mensaje, en breve nos pondremos en contacto contigo' , 'emails.message');

         return redirect()->back()->with('status', 'success')->with('message', 'Gracias por tu mensaje, en breve nos pondremos en contacto contigo')->with('title', 'Gracias!');
      }catch(Throwable $e){
         return redirect()->back()->with('status', 'error')->with('message' , 'Error al enviar el mensaje')->with('title', 'Opps!');
      }

     
   }

   public function openMessage(Message $message){
      return view('admin.messages.detail' , compact('message'));
   }

}