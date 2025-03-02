<?php

namespace App\Livewire\Menus;

use Livewire\Component;

class AdminNav extends Component
{
    public $selectedView = 'settings';

    public function render()
    {
        return view('livewire.menus.admin-nav');
    }

    public function selectView($view)
    {
        $this->selectedView = $view;
    }
}
