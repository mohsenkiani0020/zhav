<?php

namespace App\Listeners;

use App\Mail\VerificationCodeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class VerificationCodeListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        if(!$event->user->email_verified_at) {
            if ($event->user->email) {
                Mail::to($event->user->email)->send(new VerificationCodeMail($event->user));
            }
            info("VerifyUserEmailMailListener is fired for Email address: $event->user");
        }
    }
}
