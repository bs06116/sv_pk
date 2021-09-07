<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Toastr;
use Session;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
$to = "info@shinnyview.com";
$subject ="Message";

$message = "
<html>
<head>
<title>Message From ShinnyView</title>
</head>
<body>
<p>You received a Message!</p>
<div class='msgDiv'>
        <p><strong>First Name: </strong>$request->username</p>
        <p><strong>Message: </strong>$request->message</p>
        <p><strong>Phone No: </strong>$request->phone_num</p>
        <p><strong>Email: </strong>$request->email</p>
        <p><strong>Subject: </strong>$request->subject</p>
</div>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@shinnyview.com>' . "\r\n";
// $headers .= 'Cc: ahtshamch96@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
mail($request->email,$subject,$message,$headers);
        // toastr()->success('Thank you: A member of team will be in touch with shortly');
        Session::flash('emailsend','email has be send');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}