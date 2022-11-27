<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class SeoMetaInput extends Component
{
    public $meta_title;
    public $meta_keywords;
    public $meta_description;
    public $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title_field = 'meta_title', $keywords_field = 'meta_keywords', $description_field = 'meta_description', $data = null)
    {
        $this->meta_title = $title_field;
        $this->meta_keywords = $keywords_field;
        $this->meta_description = $description_field;
        $this->data = $data;
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
        return view('spcomponents::' . $platform . '.seo-meta-input');
    }
}
