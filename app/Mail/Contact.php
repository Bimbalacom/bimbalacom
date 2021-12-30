<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        private string $name,
        private string $email,
        private string $messageText,
        private ?string $company = null,
        private ?string $phone = null)
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('theme::emails.new-contact-email')
            ->subject('New email sent from the contact form of bimbala.com')
            ->replyTo($this->email)
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'messageText' => $this->messageText,
                'company' => $this->company,
                'phone' => $this->phone,
           ]);
    }
}
