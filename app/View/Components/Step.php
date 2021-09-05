<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Step extends Component
{

    public $isActive;
    public $isFinished;
    public $label;
    public $number;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isActive, $isFinished, $label, $number)
    {
        $this->isActive = $isActive;
        $this->isFinished = $isFinished;
        $this->label = $label;
        $this->number = $number;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.step');
    }
}
