<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $attachmentPath;
    protected $data;

    /**
     * Create a new message instance.
     *
     * @param string $attachmentPath
     * @param array $data
     */
    public function __construct($attachmentPath, $data)
    {
        $this->attachmentPath = $attachmentPath;
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Invoice Mail',
            cc: ['cc@example.com'], // Optional CC recipients
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.invoice', // The Blade view for the email content
            with: $this->data, // Pass the data to the view
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->attachmentPath)->as('invoice.pdf'), // Customize filename if needed
        ];
    }
}
