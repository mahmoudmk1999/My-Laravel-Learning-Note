<?php

namespace App\Listeners;

use App\Events\WelcomeUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailWelcomeUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\WelcomeUser  $event
     * @return void
     */
    public function handle(\App\Events\WelcomeUser $event)
    {
        Mail::to($event->user->email)->send(new \App\Mail\WelcomeUser($event->user));
    }
}
