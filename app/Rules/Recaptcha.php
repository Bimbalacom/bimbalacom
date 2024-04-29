<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Recaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $g_response = \Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('recaptcha.api_secret_key'),
            'response' => $value,
            'remoteip' => request()?->getClientIp(),
        ]);
        if (!$g_response->json('success')) {
            $fail("The {$attribute} is invalid.");
        }
    }
}
