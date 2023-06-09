<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadCrumbComponent extends Component
{

    public $modal, $modalId, $modalType;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modal = false, $modalType = null, $modalId = null)
    {
        $this->modal = $modal;
        $this->modalId = $modalId;
        $this->modalType = $modalType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bread-crumb-component');
    }
}
