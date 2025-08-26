<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class SearchContainer extends Component
{
    public $offcanvas;
    public $action;
    public $searchButton;
    public $resetButton;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action = null, $offcanvas = false)
    {
        $this->offcanvas = $offcanvas ?? config('blade-components.search_offcanvas');
        $this->action = $action ?? url()->current();
        $this->searchButton = config('blade-components.search_btn_class') ?? 'btn-primary';
        $this->resetButton = config('blade-components.reset_btn_class') ?? 'btn-primary';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $platform = config('blade-components.platform');
        if (! in_array($platform, ['bootstrap3', 'bootstrap4', 'bootstrap5'])) {
            $platform = 'bootstrap4';
        }

        return view('blade-components::components.'.$platform.'.search-container');
    }
}
