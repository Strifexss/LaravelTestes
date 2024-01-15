<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nomes extends Component
{
    public $nomes;
    public $id;
    public $data;

    public function __construct($nomes, $id, $data)
    {
        $this->nomes = $nomes;
        $this->id = $id;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nomes');
    }
}
