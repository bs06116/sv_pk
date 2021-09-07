<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Toastr;
use Session;

class NewsletterController extends Controller
{
    public function store(Request $request){
        
        if (! Newsletter::isSubscribed($request->user_email) ) {
            //env(MAILCHIMP_APIKEY)
             Newsletter::subscribe($request->user_email);
            
             Session::flash('subscribe','email has be send');
         return redirect()->back();
        }
        Session::flash('email','email has be send');
        // toastr()->success('Email already subscribed');
        return redirect()->back();
    
    }
}
