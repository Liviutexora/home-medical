<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public array $formData
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form Submission',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-admin',
            with: [
                'name'     => $this->formData['name'],
                'email'    => $this->formData['email'],
                'phone'    => $this->formData['phone'] ?? null,
                'subject'  => $this->formData['subject'] ?? null,
                'services' => $this->formData['services'] ?? null,
                'address'  => $this->formData['address'] ?? null,
                'website'  => $this->formData['website'] ?? null,
                'userMessage' => $this->formData['message'],
            ],
        );
    }
}
