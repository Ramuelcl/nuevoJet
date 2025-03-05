{{-- Ubicación: resources/views/livewire/forms/search.blade.php --}}
<div class="relative">
  <div
       class="flex items-center overflow-hidden rounded-lg border border-gray-300 focus-within:border-blue-500 focus-within:ring-1 focus-within:ring-blue-500 bg-white transition-all duration-200 ease-in-out shadow-sm hover:shadow">
    <div class="flex items-center justify-center pl-3">
      <x-forms.tw_icons name="search" class="w-5 h-5 text-gray-400" />
    </div>
    <input type="search" wire:model.live="search" wire:keydown.enter="$dispatch('search-triggered', { search: search })"
           class="block w-full py-2 pl-2 pr-3 text-sm text-gray-700 border-0 focus:ring-0 focus:outline-none"
           placeholder="{{ __($placeholder) }}" @if ($disabled) disabled @endif />
  </div>
</div>
