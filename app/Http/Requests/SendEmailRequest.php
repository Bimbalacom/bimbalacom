<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
{
    protected $redirectRoute = 'contact';
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'g-recaptcha-response'=> [
                'required',
                new Recaptcha(),
            ],
            'name' => [
                'required',
                'string',
                'min:3'
            ],
            'email' => [
                'required',
                'email'
            ],
            'company' => [
                'string',
                'min:3'
            ],
            'phone' => [
                'string',
                'min:3'
            ],
            'message' => [
                'required',
                'string',
                'min:15'
            ],
        ];
    }
}
