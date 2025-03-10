<x-app-layout>
  <x-slot name="header">
    {{ __('Welcome') }}
  </x-slot>

  <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          {{ __('Welcome!') }}
        </div>
      </div>
    </div>
  </div>

  <x-slot name="footer">
    {{ __('Footer') }}
  </x-slot>

</x-app-layout>
