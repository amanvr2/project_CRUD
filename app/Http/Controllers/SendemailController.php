<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendemailController extends Controller
{
    public function send(Request $request)
    {
        $data = array(

            'name'=> $request->name,
            'message'=> $request->message
        );

        Mail::to('amanvr4@outlook.com')->send(new SendMail($data));
        return back()->with('success','thanks');
    }
}
