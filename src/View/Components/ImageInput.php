<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class ImageInput extends Component
{
    public $fileId;
    public $inputName;
    public $inputLabel;
    public $required;
    public $multiple;
    public $filePath;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = 'image', $name = 'image', $label = 'Image', $required = null, $multiple = null, $path = null)
    {
        $this->fileId = $id;
        $this->inputName = $name;
        $this->inputLabel = $label;
        $this->required = $required;
        $this->multiple = $multiple;
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
        if (!in_array($platform, ['bootstrap3', 'bootstrap4', 'bootstrap5'])) {
            $platform = 'bootstrap4';
        }
        return view('spcomponents::' . $platform . '.image-input');
    }
}
