<?php

namespace App\Providers;

use App\Events\ChangePasswordEvent;
use App\Events\ContactFormSubmitEvent;
use App\Events\MembershipEvent;
use App\Events\NewsletterSubmitEvent;
use App\Events\RegistrationEvent;
use App\Events\ResendVerificationCodeEvent;
use App\Events\ResetPasswordEvent;
use App\Listeners\ChangePasswordListener;
use App\Listeners\ContactFormSubmitListener;
use App\Listeners\MembershipListener;
use App\Listeners\NewsletterSubmitListener;
use App\Listeners\RegistrationListener;
use App\Listeners\ResetPasswordListener;
use App\Listeners\VerificationCodeListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        RegistrationEvent::class => [
            VerificationCodeListener::class,
        ],
        MembershipEvent::class => [
            MembershipListener::class
        ],
        ResendVerificationCodeEvent::class => [
            VerificationCodeListener::class
        ],
        ResetPasswordEvent::class => [
            ResetPasswordListener::class
        ],
        ChangePasswordEvent::class => [
            ChangePasswordListener::class
        ],
        ContactFormSubmitEvent::class => [
            ContactFormSubmitListener::class
        ],
        NewsletterSubmitEvent::class => [
            NewsletterSubmitListener::class
        ]


    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
