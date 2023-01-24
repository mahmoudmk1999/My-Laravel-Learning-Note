<?php

namespace App\Http\Controllers;

use App\Mail\MarkMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MarkMailController extends Controller
{
    public function mailSendMark(){
        Mail::to('mahmodomar61@gmail.com')->send(new MarkMail());

        return response('sending');
    }
}
