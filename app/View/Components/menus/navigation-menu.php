<?php

namespace App\View\Components\menus;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navigation-menu extends Component {
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.menus.navigation-menu');
    }
}
