<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use App\Mail\Contact;
use Illuminate\Http\RedirectResponse;
use Mail;

class ContactController extends Controller
{
    public const CONTACT_EMAIL = 'contact@bimbala.com';

    /**
     * Handle the incoming request.
     *
     * @param  SendEmailRequest  $request
     * @return RedirectResponse
     */
    public function __invoke(SendEmailRequest $request)
    {
        $data = $request->validated();
        Mail::to(self::CONTACT_EMAIL)->send(new Contact(
            $data['name'], $data['email'], $data['message'], $data['company'] ?? null, $data['phone'] ?? null
        ));
        $request->session()->flash('success', 'Email sent!');
        return redirect()->route('contact');
    }
}
