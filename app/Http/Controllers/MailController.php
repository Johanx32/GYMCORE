<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
   
    public function index()

    {

        $datos = [

            'title' => 'Mail from ItSolutionStuff.com',

            'body' => 'This is for testing email using smtp.'

        ];

         

        Mail::to('
        smtp.mailtrap.io')->send(new DemoMail($datos));

           

        dd("Email is sent successfully.");

    }

}

