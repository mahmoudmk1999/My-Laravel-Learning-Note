<?php

namespace App\Http\Controllers;

use App\Jobs\ActiveUsersJob;
use App\Jobs\SendMailJob;
use App\Mail\SendMailUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){

        ActiveUsersJob::dispatch()->delay(now()->second(5));
        return 'sending data  to database';
    }

    public function sendMail(){
        $data=[
            'mahmodomar61@gmail.com','mahmodomar61@gmail.com','mahmodomar61@gmail.com',
        ];
        SendMailJob::dispatch($data);

        return 'the mail send loading';
    }
}
