<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller{
    //
    public function create(Request $req){

        $subscription = new Subscription;

        $subscription->email = $req->input('email');
        $subscription->save();

        echo('Vamos a crear esto');
        
    }
}
