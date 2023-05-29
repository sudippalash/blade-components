<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class SeoMetaPush extends Component
{
    public $pageTitle;
    public $title;
    public $keywords;
    public $description;
    public $image;
    public $is_og;
    public $sectionName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageTitle = null, $title = null, $keywords = null, $description = null, $image = null, $is_og = true, $sectionName = null)
    {
        $this->pageTitle = $pageTitle ?: config('app.name');
        $this->title = $title;
        $this->keywords = $keywords;
        $this->description = $description;
        $this->image = $image;
        $this->is_og = $is_og;
        $this->sectionName = $sectionName ?: config('blade-components.seo_section');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-components::components.seo-meta-push');
    }
}