<!-- resources/views/livewire/admin/user-manager.blade.php -->

<div>
  {{-- @if ($crud == 'Create')
    <h1>Nuevo Usuario</h1>
  @elseif ($crud == '>Update')
    <h1>Editar Usuario</h1>
  @elseif ($crud == 'Delete')
    <h1>Realmente quiere eliminar este registro ??</h1>
  @endif --}}

  @if (session()->has('message'))
    <div>{{ session('message') }}</div>
  @endif

  <button wire:click="create()">{{ __('New') }}</button>
  <x-forms.tw_button wire:click="create()" class="text-white">{{ __('New') }}</x-forms.tw_button>
  {{-- @php
    dump($campos);
  @endphp --}}
  @if ($isOpen)
    <div>
      <h2>{{ __($crud) }} Record</h2>
      <form>
        <fieldset {{ $crud == 'Delete' ? 'disabled' : '' }}>
          @foreach ($campos as $field => $config)
            @if ($config['visible2'])
              <label>{{ $config['titulo2'] }}:</label>
              @switch($config['tipo'])
                @case('integer')
                @case('decimal')
                  <input type="text" wire:model="{{ $field }}"
                         {{ isset($config['disabled']) && $config['disabled'] ? 'disabled' : '' }}
                         value="{{ $crud === 'Create' ? '' : $this->{$field} }}">
                @break

                @case('date')
                  <input type="date" wire:model="{{ $field }}"
                         {{ isset($config['disabled']) && $config['disabled'] ? 'disabled' : '' }}
                         value="{{ $crud === 'Create' ? '' : date('Y-m-d', strtotime($this->{$field})) }}">
                @break

                @case('checkbox')
                  <input type="checkbox" wire:model="{{ $field }}"
                         {{ isset($config['disabled']) && $config['disabled'] ? 'disabled' : '' }}
                         {{ $this->{$field} ? 'checked' : '' }}>
                @break

                @case('image')
                  <input type="file" wire:model="{{ $field }}"
                         {{ isset($config['disabled']) && $config['disabled'] ? 'disabled' : '' }}>
                  @if ($crud !== 'Create' && $this->{$field})
                    <img src="{{ asset('storage/' . $this->{$field}) }}" alt="Foto" class="mt-2 w-10 h-10">
                  @endif
                @break

                @default
                  <input type="text" wire:model="{{ $field }}"
                         {{ isset($config['disabled']) && $config['disabled'] ? 'disabled' : '' }}
                         value="{{ $crud === 'Create' ? '' : $this->{$field} }}">
              @endswitch
            @endif
          @endforeach
        </fieldset>
        <x-forms.tw_button wire:click="{{ $crud == 'Delete' ? 'deleting(' . $user_id . ')' : 'store()' }}"
                           color="red"
                           class="text-white">{{ $crud == 'Delete' ? __('Delete') : ($crud == 'Create' ? __('Save') : __('Update')) }}</x-forms.tw_button>

        <button type="button" wire:click="closeModal()">{{ __('Cancel') }}</button>
      </form>

    </div>
  @endif

  <table>
    <thead>
      <tr>
        @include('includes.titulos')
        <th class="px-4 py-1 text-gray-900 dark:text-white text-center">{{ __('Actions') }}</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $data)
        <tr>
          @include('includes.campos', ['data' => $data])
          <td class="px-4 py-1 text-gray-900 dark:text-white text-center">
            <button wire:click="edit({{ $data->id }})">{{ __('Edit') }}</button>
            <button wire:click="delete({{ $data->id }})">{{ __('Delete') }}</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
