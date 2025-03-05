<?php
// Ubicación: app/Livewire/Forms/Search.php
// uso: <livewire:search :enabled="true" placeholder="Buscar usuarios..." />
// uso: <livewire:forms.search :placeholder="'Buscar...'" :disabled="false" />
// uso: <livewire:forms.search placeholder="Buscar..." :model="$users" />
// uso: <livewire:forms.search :placeholder="'Buscar usuarios...'" :disabled="false" :model="'App\Models\User'" /> 

namespace App\Livewire\Forms;

use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public $disabled = true;
    public $placeholder;
    public $model = null;

    public function mount($disabled = false, $placeholder = 'Search...', $model = null)
    {
        if ($placeholder) {
            $this->placeholder = $placeholder;
        }
        $this->model = $model;
        $this->disabled = !$disabled;
    }

    public function updatedSearch()
    {
        if ($this->model) {
            $this->dispatch('search-updated', $this->search);
        }
    }

    public function render()
    {
        return view('livewire.forms.search');
    }
}
