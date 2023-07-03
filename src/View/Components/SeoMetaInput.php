<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class SeoMetaInput extends Component
{
    public $meta_title;
    public $meta_keywords;
    public $meta_description;
    public $seoData;
    public $seoForm;

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
        $this->seoData = $data;

        $style = null;
        if (config('blade-components.seo_form.background_color')) {
            $style .= 'background-color:'. config('blade-components.seo_form.background_color') .';';
        }
        if (config('blade-components.seo_form.background_padding')) {
            $style .= 'padding:'. config('blade-components.seo_form.background_padding') .';';
        }
        
        $labelCol = null;
        if (config('blade-components.seo_form.label_col')) {
            $labelClass = config('blade-components.platform') == 'bootstrap3' ? 'control-label ' : 'col-form-label ';
            $labelCol = 'class="'. $labelClass . config('blade-components.seo_form.label_col') .'"';
        }
        
        $inputCol = null;
        if (config('blade-components.seo_form.input_col')) {
            $inputCol = 'class="'. config('blade-components.seo_form.input_col') .'"';
        }
        $this->seoForm = [
            'style' => $style,
            'label_col' => $labelCol,
            'input_col' => $inputCol,
        ];
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
        return view('blade-components::components.' . $platform . '.seo-meta-input');
    }
    
    public function getValue($key)
    {
        return old($key, isset($this->seoData) ? $this->seoData->{$key} : '');
    }
}
