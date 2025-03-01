{{-- resources/views/includes/titulos.blade.php --}}
@foreach ($campos as $field => $config)
  @if ($config['visible1'])
    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">{{ $config['titulo1'] }}</th>
  @endif
@endforeach
