{{-- resources/views/includes/campos.blade.php --}}
@foreach ($campos as $field => $config)
  @php
    $valorCampo = $data->$field;
    $tipoCampo = $config['tipo'];
    $visible = $config['visible1'];
  @endphp
  @if ($visible)
    <td class="border px-4 py-1 text-gray-900 dark:text-white">
      @switch($tipoCampo)
        @case('integer')
        @case('decimal')
          <div class="text-right">
            {{ number_format($valorCampo, $config['decimal'] ?? 0, '.', ',') }}
          </div>
        @break

        @case('date')
          <div class="text-center">
            {{ date('d/m/Y', strtotime($valorCampo)) }}
          </div>
        @break

        @case('checkbox')
          <div class="text-center">
            {{ $valorCampo ? 'yes' : 'no' }}
          </div>
        @break

        @case('image')
          <div class="text-center w-10 h-10">
            @if (Storage::disk('public')->exists($valorCampo))
              <img src="{{ asset('storage/' . $valorCampo) }}" alt="Foto">
            @endif
          </div>
        @break

        @default
          <div class="text-left">
            {{ $valorCampo }}
          </div>
      @endswitch
    </td>
  @endif
@endforeach
