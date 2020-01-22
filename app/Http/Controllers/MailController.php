<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function basic_email() {
        $data = array('name'=>"Aman Verma");
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('info@mudrahome.com', 'varun lau')->subject
              ('Laravel Basic Testing Mail');
           $message->from('amanvr2@gmail.com','Aman Verma');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
     public function html_email() {
        $data = array('name'=>"Aman Verma");
        Mail::send('mail', $data, function($message) {
           $message->to('info@mudrahome.com', 'varun lau')->subject
              ('Laravel HTML Testing Mail');
           $message->from('amanvr2@gmail.com','Aman Verma');
        });
        echo "HTML Email Sent. Check your inbox.";
     }
     public function attachment_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
           $message->to('amanvr4@outlook.com', 'Tutorials Point')->subject
              ('Laravel Testing Mail with Attachment');
           $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
           $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
           $message->from('amanvr2@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
     }
}
