<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class ActionGroup extends Component
{
    public $btnClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->btnClass = config('blade-components.action_group_btn_class');
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

        return view('blade-components::components.'.$platform.'.action-group');
    }
}
