<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable{
   use Queueable, SerializesModels;

   //Variables
   public $name;
   public $email;
   public $msg;

   /*El constructor recibe los parametros enviados por el servicio*/
   public function __construct($name , $email, $msg){
      $this->name = $name;
      $this->email = $email;
      $this->msg = $msg;
   }

   /**Build the message @return $this*/
   public function build(){
      //El contenido del mail es esta vista de blade
      return $this->view('emails.message');
   }
}