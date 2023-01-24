<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavBar extends Component
{

    public $sport;
    public function __construct($sport)
    {

        $this->sport = $sport;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-bar');
    }
}
