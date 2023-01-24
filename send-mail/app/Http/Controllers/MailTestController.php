<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailTestController extends Controller
{
    public function mailSend(){
        Mail::to('mahmodomar61@gmail.com')->send(new TestMail());

        return response('sending');
    }
}
