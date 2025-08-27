<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class SearchButton extends Component
{
    public $offcanvas;
    public $filterButton;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($offcanvas = false)
    {
        $this->offcanvas = $offcanvas ?? config('blade-components.search_offcanvas');
        $this->filterButton = config('blade-components.filter_btn_class') ?? 'btn-success';
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

        return view('blade-components::components.'.$platform.'.search-button');
    }
}
