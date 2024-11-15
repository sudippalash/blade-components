<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class FileInput extends Component
{
    public $fileId;

    public $inputName;

    public $required;

    public $filePath;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = 'file', $name = 'file', $required = null, $path = null)
    {
        $this->fileId = $id;
        $this->inputName = $name;
        $this->required = $required;
        $this->filePath = $path;
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

        return view('blade-components::components.'.$platform.'.file-input');
    }
}
