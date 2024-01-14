<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WelcomeWizard extends Component
{
    /**
     * @var int
     */
    public $currentStep;

    /**
     * @param  int  $currentStep
     */
    public function __construct(int $currentStep)
    {
        $this->currentStep = $currentStep;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('theme::components.welcome-wizard');
    }
}
