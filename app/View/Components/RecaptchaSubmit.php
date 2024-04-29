<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecaptchaSubmit extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $action, public string $formId)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recaptcha-submit');
    }
}
