<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Settings extends Component
{
    public $settings;

    protected $rules = [
        'settings.site_name' => 'required|string',
        'settings.site_email' => 'required|email',
        'settings.site_description' => 'nullable|string',
        // Agrega más reglas según sea necesario
    ];

    public function render()
    {
        return view('livewire.admin.settings', [
            'settings' => $this->settings,
        ]);
    }

    public function mount()
    {
        // Cargar la configuración actual desde la base de datos o un archivo
        $this->settings = config('guzanet');
    }

    public function save()
    {
        $this->validate();

        // Guardar la configuración en la base de datos o un archivo
        // Por ejemplo, si estás usando un modelo de configuración
        foreach ($this->settings as $key => $value) {
            config('guzanet.' . $key, $value);
            // Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        session()->flash('message', 'Settings saved successfully.');
    }
}
