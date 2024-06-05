<?php

namespace App\Mail;

use AllowDynamicProperties;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

#[AllowDynamicProperties] class VerificationCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        info('Email content:', [
            'name'    => $this->user->first_name,
            'to'      => $this->user->email,
            'subject' => 'Email Verification Code - Zhav Studio'
        ]);

        return new Envelope(
            from: env("MAIL_FROM_ADDRESS", 'info@zhavstudio.com'),
            to: $this->user->email,
            subject: 'Verify User Email Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.verification.verification-code',
            with: [
                'name'              => $this->user->first_name,
                'verification_code' => $this->user->verification_code,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
