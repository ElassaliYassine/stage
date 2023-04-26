<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
     public function index(Request $request)
    {
        // return $request ;
        $testMailData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('haljak70@gmail.com')->send(new SendMail($testMailData));
        // Mail::to('cynchy2000@gmail.com')->send(new SendMail($testMailData));
        return back()->with('msg',"Success! Email has been sent successfully.");
            }
}
