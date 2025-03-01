<?php
// app/view/components/AdminLayout.php
namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class adminLayout extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.admin');
    }
}
