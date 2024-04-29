<?php

namespace App\Http\Controllers\Auth;

use App\Rules\Recaptcha;
use Illuminate\Http\Request;
use Wave\Http\Controllers\Auth\LoginController as AuthLoginController;

class LoginController extends AuthLoginController
{
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            'g-recaptcha-response' => [
                'required',
                new Recaptcha(),
            ]
        ]);
    }
}
