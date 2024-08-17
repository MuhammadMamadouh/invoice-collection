<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

     public $attachments;
     public $data; 

    /**
     * Create a new message instance.
     *
     * @param array $attachments 
     * @param array $data
     */
    public function __construct(array $attachments, array $data)
    {
        $this->attachments = $attachments;
        $this->data = $data;
    }

    public function build()
    {
        $email = $this->view('emails.invoice')
                      ->with('data', $this->data)
                      ->from('eng.mohamedabdelmeged900@gmail.com', 'Innvoice Collection');

        // Add attachments if provided
        if (!empty($this->attachments)) {
            foreach ($this->attachments as $attachment) {
                $email->attach($attachment);
            }
        }

        return $email; 
    }
}
