<?php

namespace Sudip\BladeComponents\View\Components;

use Illuminate\View\Component;

class PaginationRow extends Component
{
    public $records;
    public $paginationMessage;
    public $paginationDropdown;
    public $paginationUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($records = null)
    {
        if ($records instanceof \Illuminate\Pagination\AbstractPaginator) {
            $this->records = $records;
        } else {
            $this->records = null;
        }

        //Pagination Message showing
        if ($this->records) {
            $this->paginationMessage = 'Showing ' . $this->records->firstItem() . ' to ' . $this->records->lastItem().' of '.$this->records->total() . ' row(s)';
        } else {
            $this->paginationMessage = null;
        }

        //Pagination Dropdown item init
        $this->paginationDropdown = config('blade-components.paginations');
        if (!is_array($this->paginationDropdown)) {
            $this->paginationDropdown = [];
        }

        //Pagination URL generate
        $currentUrl = url()->current();
        if (request()->getQueryString()) {
            $currentUrl .= '?' . request()->getQueryString() . '&';
        } else {
            $currentUrl .= '?';
        }
        $this->paginationUrl = $currentUrl;
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
        return view('blade-components::components.' . $platform . '.pagination-row');
    }
}
