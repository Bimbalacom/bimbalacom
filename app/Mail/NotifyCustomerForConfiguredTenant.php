<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyCustomerForConfiguredTenant extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    private $tenantSubDomain;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $tenantSubDomain)
    {
        $this->tenantSubDomain = $tenantSubDomain;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('theme::emails.configured-tenant-email')
            ->subject('Your Bimbala portal is ready')
            ->replyTo('contact@bimbala.com')
            ->with([
                'tenantSubdomain' => $this->tenantSubDomain
            ]);
    }
}
