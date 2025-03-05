{{-- Ubicación: resources/views/layouts/guzanet.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ theme: '{{ auth()->user()->theme ?? 'light' }}' }" x-bind:class="theme">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('guzanet.appEmpresa') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/dark.js'])

    <!-- Styles -->
    @livewireStyles
  </head>

  <body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">
    <x-banner />

    <x-menus.navigation-menu />

    {{-- <nav class="bg-white dark:bg-gray-800 shadow-md">
      <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="/">
          <div class="flex items-center justify-center font-bold text-2xl text-blue-900">
            <img src="{{ config('guzanet.appLogo', 'images/guzanet.png') }}" alt="Guzanet Logo" class="h-10 mr-4">
            {{ config('guzanet.appEmpresa') }}
          </div>
        </a>
      </div>
      <nav class="space-x-4">
        <a href="#" class="hover:text-blue-600">Dashboard</a>
        <a href="#" class="hover:text-blue-600">About..</a>
        <a href="#" class="hover:text-blue-600">Iconos</a>
      </nav>
      </div>
      <div class="flex items-center space-x-4">
        <div x-data="{ themeMenuOpen: false }" class="relative">
          <button @click="themeMenuOpen = !themeMenuOpen" class="focus:outline-none">
            <i class="fas fa-sun"></i>
          </button>
          <div x-show="themeMenuOpen" @click.outside="themeMenuOpen = false"
               class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-700 rounded-lg shadow-xl z-50">
            <ul>
              @foreach (['light', 'dark', 'ocean', 'forest', 'sunset', 'midnight'] as $themeOption)
                <li @click="theme = '{{ $themeOption }}'; themeMenuOpen = false;"
                    class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 cursor-pointer">
                  {{ ucfirst($themeOption) }}
                </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div x-data="{ userMenuOpen: false }" class="relative">
          <button @click="userMenuOpen = !userMenuOpen" class="focus:outline-none">
            <i class="fas fa-user-circle"></i>
          </button>
          <div x-show="userMenuOpen" @click.outside="userMenuOpen = false"
               class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-700 rounded-lg shadow-xl z-50">
            <ul>
              <li class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                <a href="{{ route('profile.show') }}">Perfil</a>
              </li>
              <li class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                <a href="{{ route('profile.settings') }}">Configuración</a>
              </li>
              <li class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit">Cerrar Sesión</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </nav> --}}

    {{ $slot }}

    <footer class="bg-white dark:bg-gray-800 py-4 text-center">
      <p>© 2025 Guzanet. Ramuel González</p>
    </footer>
  </body>

</html>
