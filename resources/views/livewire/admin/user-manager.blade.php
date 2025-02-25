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
              @if ($field == 'id')
                <input type="text" value="{{ $user_id }}" disabled>
              @else
                <input type="{{ $config['tipo'] }}" wire:model="{{ $field }}"
                       {{ isset($config['disabled']) && $config['disabled'] ? 'disabled' : '' }}>
              @endif
            @endif
          @endforeach
        </fieldset>

        <button type="button" wire:click="{{ $crud == 'Delete' ? 'deleting()' : 'store()' }}">
          {{ $crud == 'Delete' ? __('Delete') : ($crud == 'Create' ? __('Save') : __('Update')) }}
        </button>

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
      @include('includes.campos')
    </tbody>
  </table>
</div>
