<?php

namespace App\Jobs;

use App\Mail\NotifyCustomerForConfiguredTenant;
use Mail;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob;
use Wave\User;

class ConfiguredTenantProcessor extends ProcessWebhookJob
{


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $payload = $this->webhookCall['payload'];
        $user = User::query()->where('subdomain_url', $payload['name'])->firstOrFail();
        Mail::to($user)->send(new NotifyCustomerForConfiguredTenant($payload['name']));
    }
}
