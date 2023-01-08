<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StepWizard extends Component
{
    /**
     * @var int
     */
    public $currentStep;

    /**
     * @var string[][]
     */
    public $steps;

    /**
     * @param  int  $currentStep
     * @param  string[][]  $steps
     */
    public function __construct(int $currentStep, array $steps)
    {
        $this->currentStep = $currentStep;
        $this->steps = $steps;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('theme::components.step-wizard');
    }
}
