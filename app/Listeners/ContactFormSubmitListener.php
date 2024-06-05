<?php

namespace App\Listeners;

use App\Mail\ContactFormSubmitMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactFormSubmitListener
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
        if ($event->contact->email_phone){
            Mail::to(env('MAIL_RECIPIENT_1', 'info@zhavstudio.com'))->send(new ContactFormSubmitMail($event->contact));

            info("MembershipMailListener is fired for Email address: $event->contact");
        }
    }
}
