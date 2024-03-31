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
                'j' => 'required'
            ]);
    
            $subscription = new Subscription;
    
            $subscription->email = $req->input('email');
            $subscription->save();
    
            //Enviamos el email
            return $this->emailService->sendEmail($subscription->email, 'Gracias por suscribirte', 'Gracias por suscribirte a nuestro boletin', 'emails.subscription');
    
            //Enviamos con variable de session
            return redirect()->back()->with('subscription', 'success');
        }catch(\Exception $e){
            return redirect()->back()->with('subscription', 'error');
        }
        
    }
}
