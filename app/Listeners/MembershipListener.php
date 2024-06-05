<?php

namespace App\Listeners;

use App\Mail\MembershipMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class MembershipListener
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
        if ($event->user->email) {
            Mail::to($event->user->email)->send(new MembershipMail($event->user));
        }
        info("MembershipMailListener is fired for Email address: $event->user");
    }
}
