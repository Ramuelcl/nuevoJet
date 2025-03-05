<?php

namespace App\Livewire;

use Livewire\Component;

class GuzanetDashboard extends Component
{
    public $userMenuOpen = false;
    public $themeMenuOpen = false;
    public $currentTheme = 'light';
    public $themes = ['light', 'dark', 'ocean', 'forest', 'sunset', 'midnight'];

    public function toggleUserMenu()
    {
        $this->userMenuOpen = !$this->userMenuOpen;
    }

    public function toggleThemeMenu()
    {
        $this->themeMenuOpen = !$this->themeMenuOpen;
    }

    public function setTheme($theme)
    {
        $this->currentTheme = $theme;
        $this->themeMenuOpen = false;
        $this->dispatch('theme-changed', $theme);
    }

    public function render()
    {
        return view('livewire.guzanet-dashboard');
    }
}
