<?php
// app/Livewire/Admin/UserManager.php

namespace App\Livewire\Admin;

use App\Models\User as Data;
use Livewire\Component;

class UserManager extends Component
{
    public $datas, $name, $email, $password, $is_active, $user_id;
    public $isOpen = 0;
    public $crud;
    public $campos;

    public function mount()
    {
        $this->campos = config('CamposUser');
        // dump($this->campos);
        $this->crud = "List"; //'Create', 'Read', 'Update', 'Delete', 'List'
    }

    public function render()
    {
        $this->datas = Data::all();
        return view('livewire.admin.user-manager', ['campos' => $this->campos, 'crud' => $this->crud]);
    }

    public function create()
    {
        $this->crud = "Create";

        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        // dump($this->campos);
        foreach ($this->campos as $field => $config) {
            if ($config['visible2']) {
                $this->{$field} = '';
            }
        }
        $this->user_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'is_active' => 'boolean',
        ]);

        Data::updateOrCreate(['id' => $this->user_id], [
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'is_active' => $this->is_active,
        ]);

        session()->flash(
            'message',
            $this->user_id ? 'User Updated Successfully.' : 'User Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->crud = "Update";
        $user = Data::findOrFail($id);
        foreach ($this->campos as $field => $config) {
            if ($config['visible2']) {
                $this->{$field} = $user->{$field};
            }
        }
        $this->user_id = $id;
        $this->openModal();
    }

    public function delete($id)
    {
        $this->crud = "Delete";

        $user = Data::findOrFail($id);
        foreach ($this->campos as $field => $config) {
            if ($config['visible2']) {
                $this->{$field} = $user->{$field};
            }
        }
        $this->user_id = $id;
        $this->openModal();
    }

    public function deleting($id)
    {
        Data::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }
}
