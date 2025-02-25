<div> <!-- resources/views/auth/users-index.blade.php -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <!-- Contenedor para el componente -->
    <div class="container">
        <table class="w-full table-fixed divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2">sel</th>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">eMail</th>
                    <th class="px-4 py-2">Foto</th>
                    <th class="px-4 py-2">Activo</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datos as $key => $dato)
                <tr class="{{ $loop->index % 2 === 0 ? 'bg-gray-100' : 'bg-gray-200' }}">
                    <td class="px-4 py-2"><x-radio id="radio" wire:model.defer="id" wire:click="selectItem({{ $dato->id }})" /></td>
                    <td class="px-4 py-2">{{ $dato->id }}</td>
                    <td class="px-4 py-2">{{ $dato->name }}</td>
                    <td class="px-4 py-2">{{ $dato->email }}</td>
                    <td class="px-4 py-2">{{ $dato->profile_photo_path }}</td>
                    <td class="px-4 py-2">{{ $dato->is_active === 1 ? 'Si' : 'No' }}</td>
                </tr>
                @empty
                {{ __('data empty') }}
                @endforelse
            </tbody>
        </table>
    </div>
</div>