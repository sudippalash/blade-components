<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class ImportModal extends Component
{
    public $btnClass;
    public $modalId;
    public $postRoute;
    public $label;
    public $fileType;
    public $exampleFilePath;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $postUrl, $label = 'Upload File', $fileType = 'xlsx', $exampleFilePath = null)
    {
        $this->btnClass = config('blade-components.action_group_btn_class');
        $this->modalId = $id;
        $this->postRoute = $postUrl;
        $this->label = $label;
        $this->fileType = $fileType;
        $this->exampleFilePath = $exampleFilePath;
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
        return view('blade-components::components.' . $platform . '.import-modal');
    }
}
