<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>{{ $title ?? 'Page Title' }}</title>

  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  @livewireStyles
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 flex flex-col min-h-screen font-sans">

  <header>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 shadow-sm">
      <div class="px-4 py-3 lg:px-6 flex justify-between items-center">
        <!-- Botón toggle sidebar -->
        <button id="sidebarToggle" aria-label="Abrir menú" type="button" class="inline-flex items-center p-2 text-gray-600 rounded-lg sm:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:ring-gray-600 transition">
          <span class="sr-only">Abrir menú</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"/>
          </svg>
        </button>

        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3">
          <img src="" alt="FlowBite Logo" class="h-8" />
          <span class="text-xl font-semibold sm:text-2xl dark:text-white tracking-wide">Mueblix</span>
        </a>

        <!-- Menú usuario -->
        @php
            if(auth('administradores')->check()){
                $usuario = auth('administradores')->user();
                $rol = 'Administrador';
            }elseif (auth('empleados')->check()){
                $usuario = auth('empleados')->user();
                $rol = 'Empleados';
            }

            $fotoUsuario = $usuario && $usuario->foto
                ?asset('storage/'. $usuario->foto)
                :($usuario
                    ?'https://ui-avatars.com/api/?name=' . urlencode($usuario->name ?? 'U') . '&background=10B981&color=fff'
                    : 'https://ui-avatars.com/api/?name=Invitado&background=9CA3AF&color=fff'
                );

        @endphp
          @if($usuario)

        <div class="relative ml-3">
          <button id="userMenuButton" aria-expanded="false" aria-haspopup="true" type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-400 dark:focus:ring-gray-600 transition focus:outline-none" aria-label="Abrir menú de usuario">
            <img class="w-8 h-8 rounded-full ring-2 ring-gray-300 dark:ring-gray-600" src="{{ $fotoUsuario }}" alt="Foto de usuario" />
          </button>

          <div id="userMenu" class="hidden absolute right-0 mt-2 w-52 bg-white rounded-lg shadow-lg py-2 ring-1 ring-black ring-opacity-5 dark:bg-gray-800 z-50" role="menu" aria-orientation="vertical" aria-labelledby="userMenuButton" tabindex="-1">
            <div class="px-5 py-3 text-sm text-gray-900 dark:text-gray-100 border-b border-gray-200 dark:border-gray-700">
              <p class="font-semibold">{{ $usuario->nombres ?? $usuario->nombres }}</p>
              <p class="truncate text-xs text-gray-500 dark:text-gray-400">{{ $usuario->email ?? $usuario->correo }}</p>
            </div>
            <a href="#" class="block px-5 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white transition" role="menuitem" tabindex="-1">Dashboard</a>
            <a href="#" class="block px-5 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white transition" role="menuitem" tabindex="-1">Configuración</a>
            <a href="#" class="block px-5 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white transition" role="menuitem" tabindex="-1">Información</a>
            <a href="#" class="block px-5 py-2 text-sm text-red-600 hover:bg-red-100 dark:text-red-400 dark:hover:bg-red-600 dark:hover:text-white transition" role="menuitem" tabindex="-1">Salir</a>
          </div>
        </div>
          @endif
      </div>
    </nav>
  </header>

  <!-- Sidebar -->
  <aside id="sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 bg-white border-r border-gray-200 transform -translate-x-full sm:translate-x-0 transition-transform duration-300 dark:bg-gray-900 dark:border-gray-700 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100 dark:scrollbar-thumb-gray-600 dark:scrollbar-track-gray-700">
    <nav class="h-full px-4 py-6 flex flex-col justify-between">
      <ul class="space-y-3 font-medium">
        <li>
          <a href="/" class="flex items-center p-3 rounded-lg text-gray-900 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-700 transition focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
              <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
              <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            Inicio
          </a>
        </li>
        <!-- Otros enlaces -->
        @if(Auth::guard('administradores')->check())
        <li>
          <a href="#" class="flex items-center p-3 rounded-lg text-gray-900 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-700 transition focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add mr-3" viewBox="0 0 16 16">
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
              <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
            </svg>
            Registrar empleado
          </a>
        </li>
        @endif
        <li>
          <a href="/producto/index-producto" class="flex items-center p-3 rounded-lg text-gray-900 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-700 transition focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500" wire:navigate.hover>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill mr-3" viewBox="0 0 16 16">
              <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6z"/>
            </svg>
            Registrar producto
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center p-3 rounded-lg text-gray-900 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-700 transition focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill mr-3" viewBox="0 0 16 16">
              <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6z"/>
            </svg>
            Ver pedidos
          </a>
        </li>
      </ul>
    </nav>
  </aside>

  <!-- Contenido principal -->
  <main class="flex-1 ml-0 sm:ml-64 pt-20 px-8 pb-10 min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    {{ $slot ?? '' }}
  </main>

  @livewireScripts

  <script>
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const userMenuButton = document.getElementById('userMenuButton');
    const userMenu = document.getElementById('userMenu');

    sidebarToggle?.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });

    userMenuButton?.addEventListener('click', (e) => {
      e.stopPropagation();
      userMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', () => {
      if (!userMenu.classList.contains('hidden')) {
        userMenu.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
