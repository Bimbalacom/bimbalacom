<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $messageText;
    private $company = null;
    private $phone = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $email,
        string $messageText,
        ?string $company = null,
        ?string $phone = null)
    {
        $this->phone = $phone;
        $this->company = $company;
        $this->messageText = $messageText;
        $this->email = $email;
        $this->name = $name;
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
