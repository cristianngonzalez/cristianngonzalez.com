<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

//Services
use App\Services\EmailService;

class SubscriptionController extends Controller{

    protected $emailService;

    public function __construct(EmailService $emailService){
        $this->emailService = $emailService;
    }
    //
    public function create(Request $req){
        
        try{
            $req->validate([
                'email' => 'required|email',
            ]);
    
            $subscription = new Subscription;
    
            $subscription->email = $req->input('email');
            $subscription->save();
    
            //Enviamos el email
            $email = $this->emailService->sendEmail($subscription->email, 'Gracias por suscribirte', 'Gracias por suscribirte a nuestro boletin', 'emails.subscription');
    
            //Enviamos con variable de session (generalmente utilizadas por el sweet alert)
            return redirect()->back()->with('status', 'success')->with('message', 'Gracias por suscribirte')->with('title', 'Gracias!');
        }catch(\Exception $e){
            //Enviamos con variable de session (generalmente utilizadas por el sweet alert)
            return redirect()->back()->with('status', 'error')->with('message' , 'Error al suscribirte')->with('title', 'Opps!');
        }
        
    }
}
